<?php
  //header("Access-Control-Allow-Origin: *");
  //header("Content-Type: application/json; charset=UTF-8");

  const DB_HOST = "127.0.0.1";
  const DB_USER = "root";
  const DB_PASSWORD = "";
  //const DB = "my_todos";
  const DB = "angularcode_task";

  // Create connection
  $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB);

  // Check connection
  if ($mysql->connect_error) {
    die("DB Connection failed: " . $mysql->connect_error);
  }
?>
