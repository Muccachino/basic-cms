<?php

use EdvGraz\Validation\Validate;

require "../src/bootstrap.php";

$data["navigation"] = $cms->getCategory()->fetchNavigation();
$user = [];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user["forename"] = filter_input(INPUT_POST, "forename");
  $user["surname"] = filter_input(INPUT_POST, "surname");
  $user["email"] = filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
  $user["password"] = filter_input(INPUT_POST, "password");
  $confirm = filter_input(INPUT_POST, "confirm");

  if (!$user["email"]) {
    $errors["email"] = "Email is not valid";
  }

  $errors["forename"] = Validate::isText($user["forename"]) ? "" : "Forename must be between 1 and 100 characters";
  $errors["surname"] = Validate::isText($user["surname"], 1, 200) ? "" : "Surname must be between 1 and 200 characters";
  $errors["password"] = Validate::is_password($user["password"]) ? "" : "Password must be at least 8 characters long
                                                                          and contain at least one number and one uppercase and lowercase letter";
  $errors["confirm"] = ($user["password"] === $confirm) ? "" : "Password does not match";

  $problems = implode($errors);

  if (empty($problems)) {
    if ($cms->getUser()->addUser($user)) {
      redirect("login.php", ["success" => "User added successfully"]);
    } else {
      $errors["email"] = "Email already exists.";
    }
  }
}

$data["user"] = $user;
$data["errors"] = $errors;

echo $twig->render('register.html', $data);