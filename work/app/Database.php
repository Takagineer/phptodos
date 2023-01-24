<?php

class Database
{
  public static function getInstance()
  {
    try {
      $instance = new PDO(
        DSN,
        DB_USER,
        DB_PASS,
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
      );
      return $instance;
    } catch (PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }
}
