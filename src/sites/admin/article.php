<?php

use EdvGraz\Validation\Validate;

is_admin($session->role);


// Variablen initialisieren für Bildupload

$path_to_img = dirname(__DIR__, 1) . "/uploads/";
$allowed_types = ["image/jpeg", "image/png"];
$allowed_extensions = ["jpeg", "jpg", "png"];
$max_size = 1920 * 1080 * 2;

$data["id"] = $id ?? "";
$tmp_path = $_FILES["image_file"]["tmp_name"] ?? "";
$save_to = "";

$data["article"] = [
  "id" => $data["id"],
  "title" => "",
  "summary" => "",
  "content" => "",
  "published" => false,
  "category_id" => 0,
  "user_id" => 0,
  "images_id" => null,
  "image_file" => "",
  "image_alt" => ""
];

$data["errors"] = [
  "issue" => "",
  "title" => "",
  "summary" => "",
  "content" => "",
  "user" => "",
  "category" => "",
  "image_file" => "",
  "image_alt" => "",
];

// Lade alle Kategorien von der Datenbank

if (isset($cms)) {
  $data["categories"] = $cms->getCategory()->getAll();
  $data["users"] = $cms->getUser()->getAll();
  if ($data["id"]) {
    $data["article"] = $cms->getArticle()->fetch($data["id"], false);
    if (!$data["article"]) {
      redirect("articles", ["error" => "article not found"]);
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Bild auslesen
  if (isset($_FILES["image_file"])) {
    $image = $_FILES["image_file"];

    // Bildgröße validieren
    $errors["image_file"] = $image["error"] === 1 ? "The image is too large" : "";

    // Wenn ein Bild hochgeladen wurde, dann wird es validiert
    if ($tmp_path && $image["error"] === UPLOAD_ERR_OK) {
      // Alt-Text wird gesetzt
      $data["article"]["image_alt"] = filter_input(INPUT_POST, "image_alt");
      // Alt-Text validieren
      $data["errors"]["image_alt"] = Validate::isText($data["article"]["image_alt"], 1, 254) ? "" : "Alt text must be between 1 and 254 characters";

      // Bildtyp wird validiert
      $typ = mime_content_type($tmp_path);
      $data["errors"]["image_file"] .= in_array($typ, $allowed_types) ? "" : "The file type is not allowed";
      // Bildendung wird validiert
      $extension = pathinfo(strtolower($image["name"]), PATHINFO_EXTENSION);
      $data["errors"]["image_file"] .= in_array($extension, $allowed_extensions) ? "" : "The file extension $extension is not allowed";
      // Bildgröße wird validiert
      $data["errors"]["image_file"] .= $image["size"] > $max_size ? "The image exceeds the maximum upload size ($max_size Bytes)" : "";

      // Wenn es keine Fehler gibt, wird ein Speicherort für das Bild festgelegt
      if ($data["errors"]["image_file"] === "" && $data["errors"]["image_alt"] === "") {
        $data["article"]["image_file"] = $image["name"];
        $save_to = get_file_path($image["name"], $path_to_img, true);
      }
    }
  }

  // Daten aus dem Formular auslesen
  $data["article"]["title"] = filter_input(INPUT_POST, "title");
  $data["article"]["summary"] = filter_input(INPUT_POST, "summary");
  $data["article"]["content"] = filter_input(INPUT_POST, "content");
  $data["article"]["user_id"] = filter_input(INPUT_POST, "user_id", FILTER_VALIDATE_INT);
  $data["article"]["category_id"] = filter_input(INPUT_POST, "category_id", FILTER_VALIDATE_INT);
  $data["article"]["published"] = filter_input(INPUT_POST, "published", FILTER_VALIDATE_BOOLEAN) ? 1 : 0;

  // HTML-Code wird bereinigt
  $purifier = new HTMLPurifier();

  // Es werden nur die in der set Methode genannten HTML-Tags zugelassen.
  $purifier->config->set("HTML.Allowed", "p,br,strong,em,a[href],i,u,ul,ol,li,img[src|alt]");

  // Purifier wird auf den Content angewendet.
  $data["article"]["content"] = $purifier->purify($data["article"]["content"]);

  // Error-Meldung erstellen und zusätzliche Validierung
  $data["errors"]["title"] = Validate::isText($data["article"]["title"]) ? "" : "Title must be between 1 and 100 characters";
  $data["errors"]["summary"] = Validate::isText($data["article"]["summary"], 1, 200) ? "" : "Summary must be between 1 and 200 characters";
  $data["errors"]["content"] = Validate::isText($data["article"]["content"], 1, 10000) ? "" : "Content must be between 1 and 10000 characters";
  $data["errors"]["user"] = Validate::is_user_id($data["article"]["user_id"], $data["users"]) ? "" : "User not found";
  $data["errors"]["category"] = Validate::is_category($data["article"]["category_id"], $data["categories"]) ? "" : "Category not found";

  $problems = implode($data["errors"]);

  if (!$problems) {
    // bindings beinhaltet alle Variablen die der Funktion Statement::bindvalue übergeben werden (oder auch Statement::execute als Array)
    $bindings = $data["article"];
    try {

      // Wenn ein Bild hochgeladen wurde, wird es gespeichert
      if ($save_to) {
        scale_and_copy($tmp_path, $save_to);

        $stmt = $cms->getImage()->push($data["article"]["image_file"], $data["article"]["image_alt"]);
        // lastInsertId gibt die ID des zuletzt eingefügten Datensatzes zurück
        $bindings["images_id"] = $cms->getImage()->getLatestImageId()["LAST_INSERT_ID()"];
      }

      // Da ab hier die Bildtabelle aktualisiert wurde, werden die Bilddaten aus dem bindings Array entfernt.
      // Für das INSERT (Anlegen eines neuen Datensatzes) wird die ID automatisch mit autoinkrement erstellt
      // und muss deshalb hier aus den bindings entfernt werden.
      unset($bindings["image_file"], $bindings["image_alt"]);

      // Code, wenn ein Artikel bearbeitet wurde
      if ($data["id"]) {
        // Wenn die ID vorhanden ist, wird ein UPDATE durchgeführt und die ID wird wieder in das bindings Array aufgenommen.
        unset($bindings["author"], $bindings["created"], $bindings["category"], $bindings["image_id"]);
        $cms->getArticle()->update($bindings);

      } else {
        // Code, wenn ein neuer Artikel erstellt wird
        unset($bindings["id"]);
        $cms->getArticle()->push($bindings);
      }

      redirect("articles", ["success" => "Article successfully saved"]);
    } catch (PDOException $e) {

      $data["errors"]["issue"] = $e->getMessage();
    }
  }
}

echo $twig->render("admin/article.html", $data);


