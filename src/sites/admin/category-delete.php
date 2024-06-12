<?php

is_admin($session->role);


$data["id"] = $id ?? null;

if (isset($cms)) {
  $data["category"] = $cms->getCategory()->fetch($data["id"]);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cat_id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) ?? null;

  try {
    $cms->getCategory()->delete($cat_id);
    redirect_admin("categories.php");
  } catch (PDOException $e) {
    $error = $e->errorInfo[1];
    if ($error == "1451") {
      $categoryName = $data["category"]['name'];
      redirect_admin("categories");
    }
  }
}

echo $twig->render("admin/category-delete.html", $data);






