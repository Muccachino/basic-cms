<?php

use EdvGraz\Mail\Email;
use EdvGraz\Validation\Validate;

$errors = [];

$token = filter_input(INPUT_GET, "token");
if (!$token) {
  redirect("index");
}

$user_id = $cms->getToken()->get_user_id($token);
if (!$user_id) {
  redirect("index");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $password = filter_input(INPUT_POST, "password");
  $confirm = filter_input(INPUT_POST, "confirm");

  $errors["password"] = Validate::is_password($password) ? "" : "Password must be at least 8 characters long
  and contain at least one number and one uppercase and lowercase letter";
  $errors["confirm"] = $password === $confirm ? "" : "Passwords do not match";
  $problems = implode($errors);

  if (!$problems) {
    $cms->getUser()->updatePassword($user_id, $password);
    $user = $cms->getUser()->fetch($user_id);

    $subject = "Password Reset";
    $message = "Your password has been reset. If you did not make this request, please contact us.";
    $mail = new Email($mail_config);
    $mail->send_mail($mail_config["admin_mail"], $user["email"], $subject, $message);
    redirect("login.php", ["success" => "Password updated successfully!"]);
  }
}

echo $twig->render('reset-password.html', ['errors' => $errors, "token" => $token]);