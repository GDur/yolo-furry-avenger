<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  
   const DB_SERVER = "localhost";
   const DB_USER = "root";
   const DB_PASSWORD = "";
   const DB = "my_todos";

  // Create connectiony
  $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
