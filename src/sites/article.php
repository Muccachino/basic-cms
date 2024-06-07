<?php

$cat_id = $id;
if (!$cat_id) {
  include APP_ROOT . "/public/page_not_found.php";
}

if (isset($cms)) {
  $data["article"] = $cms->getArticle()->fetch($cat_id);
  if (!$data["article"]) {
    include APP_ROOT . "/public/page_not_found.php";
  }

  $data["navigation"] = $cms->getCategory()->fetchNavigation();
  $data["title"] = $data["article"]["title"];
  $data["description"] = $data["article"]["summary"];
  $data["section"] = $data["article"]["category_id"];

  echo $twig->render('article.html', $data);
}




