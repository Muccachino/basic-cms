<?php

use EdvGraz\Validation\Validate;

$comment_id = $id;
$data["errors"] = "";

if (!$comment_id) {
  include APP_ROOT . "/public/page_not_found.php";
}

if (isset($cms)) {
  $data["comment"] = $cms->getComment()->fetchComment($comment_id);
}

if (!$data["comment"]) {
  include APP_ROOT . "/public/page_not_found.php";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data["content"] = filter_input(INPUT_POST, "content");
  $data["errors"] = Validate::isText($data["content"], 1, 500) && (!empty($data["content"])) ? "" : "Comment must be between 1 and 500 characters long";

  if (!$data["errors"]) {
    $bindings = [
      "content" => $data["content"],
      "id" => $comment_id
    ];

    try {
      $cms->getComment()->updateComment($bindings);
      redirect_seo("article", $data["comment"]["article_id"]);
    } catch (PDOException $e) {
      $data["errors"] .= "Could not update comment!";
    }
  }
}

echo $twig->render('edit-comment.html', $data);