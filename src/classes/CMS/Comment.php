<?php

namespace EdvGraz\CMS;

use PDOException;

class Comment
{
  protected Database $db;

  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function getAllComments(int $id): array
  {
    $sql = "SELECT c.id, c.user_id, c.article_id, c.created, c.content,
            CONCAT(u.forename, ' ', u.surname) AS author
            FROM comments AS c
            JOIN user AS u ON c.user_id = u.id
            WHERE c.article_id = :id";

    return $this->db->sql_execute($sql, ["id" => $id])->fetchAll();
  }

  public function fetchComment(int $id): array
  {
    $sql = "SELECT id, user_id, article_id, created, content 
            FROM comments 
            WHERE id = :id";

    return $this->db->sql_execute($sql, ['id' => $id])->fetch();
  }

  public function createComment(array $data): bool
  {
    try {
      $sql = "INSERT INTO comments (user_id, article_id, content)
            VALUES (:user_id, :article_id, :content);";

      $this->db->sql_execute($sql, $data);

      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function updateComment(array $data): bool
  {
    try {
      $sql = "UPDATE comments SET content = :content WHERE id = :id";
      $this->db->sql_execute($sql, $data);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}