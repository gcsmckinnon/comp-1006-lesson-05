<?php
    
  // INTRODUCING PDO!
  // Create a connect function using PDO and connect to the AWS values!
  function connect () {
    $host = "localhost";
    $user = "root";
    $pass = null;
    $db = "comp_1006_lesson_05";

    try {
      $conn = new PDO("mysql:host={$host};dbname={$db}", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

      return $conn;
    } catch (PDOException $e) {
      echo "<br>{$e->getCode()}: {$e->getMessage()}</br>";
      return false;
    }
  }