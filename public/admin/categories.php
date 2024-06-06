<?php
require "../../src/bootstrap.php";

is_admin($session->role);


if (isset($cms)) {
  $data["categories"] = $cms->getCategory()->getAll();
}


$data["error"] = filter_input(INPUT_GET, "error") ?? "";
$data["success"] = filter_input(INPUT_GET, "success") ?? "";

echo $twig->render("admin/categories.html", $data);
