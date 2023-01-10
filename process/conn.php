<?php

  session_start();

  $user = "root";
  $pass = "root";
  $db = "pizzaria";
  $host = "localhost";

  // MSG DE ERRO CASO TENHA

  try {

    $conn = new PDO("mysql:host={$host};dbname={$db};charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


  } catch (PDOException $e) {

    print "Erro: " . $e->getMessage() . "</br>";
    die();
  }

  ?>