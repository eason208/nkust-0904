<?php
  $message= $_POST["message"];
   
  $servername = "localhost";
  $username = "root";
  $password = "eason0110116";
  $dbname = "bbs";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    //使用SQL的INSERT指令
   $sql = "INSERT INTO news (message) VALUES ('$message')";
   $result = $conn->query($sql);
   $conn->close();
   header("Location: index.php");
   exit;

?>