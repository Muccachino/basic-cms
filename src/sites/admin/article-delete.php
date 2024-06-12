<?php

is_admin($session->role);


$data["id"] = $id ?? null;

if (isset($cms)) {
  $data["article"] = $cms->getArticle()->fetch($data["id"], false);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $art_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? null;

  try {
    // Wenn ein Bild vorhanden ist, muss zunächst die Bild ID auf null gesetzt werden um es löschen zu können.
    if ($data["article"]["image_id"]) {
      // Prüfen, ob das Bild noch für andere Artikel verwendet wird
      $imageUsed = $cms->getArticle()->imageInUse($data["article"]["image_file"]);

      $image_path = get_file_path($data["article"]["image_file"], "", true);

      $stmt = $cms->getArticle()->setImageIdNull($art_id);

      // Wenn das Bild nicht öfter verwendet wird, kann es gelöscht werden.
      if (!$imageUsed) {
        // Löschen des Bildes aus dem Serverordner
        unlink($image_path);

        // Löschen des Bildes aus der Datenbank
        $cms->getImage()->deleteArticleImage($data["article"]["image_id"]);
      }
    }

    // Löschen des Artikels aus der Datenbank
    $cms->getArticle()->delete($art_id);

    redirect_admin("articles");

  } catch (PDOException $e) {
    redirect_admin("articles");
  }

}

echo $twig->render("admin/article-delete.html", $data);


