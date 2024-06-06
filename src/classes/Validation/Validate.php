<?php

namespace EdvGraz\Validation;

class Validate
{
  public static function isNumber($number, $min = 0, $max = 100): bool
  {
    return ($number >= $min && $number <= $max);
  }

  public static function isText($text, $min = 1, $max = 100): bool
  {
    return (strlen($text) >= $min && strlen($text) <= $max);
  }

  public static function is_user_id($id, $users): bool
  {
    foreach ($users as $user) {
      if ($user["id"] == $id) {
        return true;
      }
    }
    return false;
  }

  public static function is_category($id, $categories): bool
  {

    foreach ($categories as $category) {
      if ($category["id"] == $id) {
        return true;
      }
    }
    return false;
  }

  public static function is_password(string $password): bool
  {
    if (mb_strlen($password) >= 8
      and preg_match("/[A-Z]/", $password)
      and preg_match("/[a-z]/", $password)
      and preg_match("/[0-9]/", $password)
    ) {
      return true;
    }
    return false;
  }
}