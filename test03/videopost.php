<?php
  $title= $_POST["title"];
  $vid= $_POST["vid"];
  $pid= $_GET["pid"];
  

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
   $sql = "INSERT INTO video (title,vid,pid) VALUES ('$title','$vid','$pid')";
   $result = $conn->query($sql);
   $conn->close();
   header("Location: tvshow.php?pid=$pid");
   exit;

?>