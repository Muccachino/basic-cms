<?php

use EdvGraz\Validation\Validate;

require "../../src/bootstrap.php";

is_admin($session->role);


$data["id"] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;

$data["errors"] = [
  "issue" => "",
  "name" => "",
  "description" => "",
];

$data["category"] = [
  "id" => "",
  "name" => "",
  "description" => "",
  "navigation" => false
];

// Wenn eine ID vorhanden ist, dann wird die Kategorie aus der Datenbank geladen.
if ($data["id"]) {
  if (isset($cms)) {
    $data["category"] = $cms->getCategory()->fetch($data["id"]);
    // Wenn die Kategorie nicht gefunden wurde, wird der Benutzer zur Auflistung aller Kategorien umgeleitet
    // und über eine Fehlermeldung informiert.

    if (!$data["category"]) {
      redirect("categories.php", ["error" => "category not found"]);
    }
  }

}

// Wenn das Formular mit Daten abgeschickt wurde, dann werden die Daten validiert und gespeichert.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Die Daten werden aus dem Formular ausgelesen und validiert.
  $data["category"]["name"] = filter_input(INPUT_POST, "name");
  $data["category"]["description"] = filter_input(INPUT_POST, "description");
  $data["category"]["navigation"] = filter_input(INPUT_POST, "navigation", FILTER_VALIDATE_BOOLEAN);

  if (!$data["category"]["navigation"]) {
    $data["category"]["navigation"] = false;
  }

  // Die Daten werden auf Länge und Vorhandensein validiert
  $data["errors"]["name"] = Validate::isText($data["category"]["name"], 1, 50) && (!empty($data["category"]["name"])) ? "" : "Name must be between 1 and 50 characters long";
  $data["errors"]["description"] = Validate::isText($data["category"]["description"], 1, 254) && (!empty($data["category"]["description"])) ? "" : "Description must be between 1 and 254 characters long";

  // Fehler werden in einer Zeichenkette zusammengefasst.
  $problems = implode($data["errors"]);

  // Wenn es keine Fehler gibt, wird die Kategorie gespeichert und der Benutzer zur Kategorie-Liste umgeleitet
  if (!$problems) {

    // Die zu speichernden Daten werden in ein Array zusammengefasst, um später die Platzhalter zu ersetzen.
    $bindings = [
      "name" => $data["category"]["name"],
      "description" => $data["category"]["description"],
      "navigation" => $data["category"]["navigation"],
    ];

    try {
      // Wenn die ID vorhanden ist, wird die Kategorie aktualisiert (UPDATE), ansonsten wird eine neue Kategorie in der Datenbank erstellt (INSERT INTO)
      if ($data["id"]) {
        $bindings["id"] = $data["id"];
        $cms->getCategory()->update($bindings);
        redirect("categories.php", ["success" => "category successfully saved"]);
      } else {
        $cms->getCategory()->push($bindings);
        redirect("categories.php", ["success" => "category successfully saved"]);

      }
    } catch (PDOException $e) {
      $data["errors"]["issue"] = "Name already in use";
    }
  } else {
    $data["errors"]["issue"] = "Please correct the following errors: " . $problems;
  }
}

echo $twig->render("admin/category.html", $data);

