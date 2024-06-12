<?php

use EdvGraz\Validation\Validate;

$data["errors"] = "";

$cat_id = $id;

if (!$cat_id) {
  include APP_ROOT . "/public/page_not_found.php";
}

if (isset($cms)) {
  $data["article"] = $cms->getArticle()->fetch($cat_id);
  $data["comments"] = $cms->getComment()->getAllComments($data["article"]["id"]);
  $data["current_user"] = (int)$session->id;

  if (!$data["article"]) {
    include APP_ROOT . "/public/page_not_found.php";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data["article_id"] = filter_input(INPUT_POST, "article_id", FILTER_SANITIZE_NUMBER_INT);
  $data["user_id"] = filter_input(INPUT_POST, "user_id", FILTER_SANITIZE_NUMBER_INT);
  $data["content"] = filter_input(INPUT_POST, "content");


  $data["errors"] = Validate::isText($data["content"], 1, 500) && (!empty($data["content"])) ? "" : "Comment must be between 1 and 500 characters long";

  if (!$data["errors"]) {
    $bindings = [
      "article_id" => $data["article_id"],
      "user_id" => $data["user_id"],
      "content" => $data["content"]
    ];

    try {
      if ($session->role !== "visitor") {
        $cms->getComment()->createComment($bindings);
      }
    } catch (PDOException $e) {
      $data["errors"] = "Couldn't create comment!";
    }
  }
}

$data["navigation"] = $cms->getCategory()->fetchNavigation();
$data["title"] = $data["article"]["title"];
$data["description"] = $data["article"]["summary"];
$data["section"] = $data["article"]["category_id"];

echo $twig->render('article.html', $data);




