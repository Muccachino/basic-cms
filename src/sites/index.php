<?php


if (isset($cms)) {
  $data["articles"] = $cms->getArticle()->getAll(null, true, null, 6);

  $data["navigation"] = $cms->getCategory()->fetchNavigation();
}

// Header Variablen setzen
$data["title"] = "IT-News";
$data["description"] = "All about IT and News from Software Development and Hardware";
$data["section"] = "";

echo $twig->render('index.html', $data);

