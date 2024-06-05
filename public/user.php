<?php
require "../src/bootstrap.php";

$user_id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (!$user_id) {
  include APP_ROOT . "/public/page_not_found.php";
}

if (isset($cms)) {
  $data["user"] = $cms->getUser()->fetch($user_id);
  if (!$data["user"]) {
    include APP_ROOT . "/public/page_not_found.php";
  }

  $data["articles"] = $cms->getUser()->fetchUserArticles($user_id);

  $data["navigation"] = $cms->getCategory()->fetchNavigation();
  $data["title"] = $data["user"]["forename"] . " " . $data["user"]["surname"] . " - IT-News";
  $data["description"] = $data["title"];
  $data["section"] = "";

  echo $twig->render('user.html', $data);
}

