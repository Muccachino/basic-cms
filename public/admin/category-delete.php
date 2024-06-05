<?php
require "../../src/bootstrap.php";

$data["id"] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) ?? null;

if (isset($cms)) {
  $data["category"] = $cms->getCategory()->fetch($data["id"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cat_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? null;

  try {
    $cms->getCategory()->delete($cat_id);
    redirect("categories.php", ["success" => "category successfully deleted"]);
  } catch (PDOException $e) {
    $error = $e->errorInfo[1];
    if ($error == "1451") {
      $categoryName = $data["category"]['name'];
      redirect("categories.php", ["error" => "Category $categoryName can not be removed, there are articles in the Category"]);
    }
  }
}

echo $twig->render("admin/category-delete.html", $data);






