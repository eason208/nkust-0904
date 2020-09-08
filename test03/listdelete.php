<?php

$id= $_GET["id"];
if($id==NULL){
    header("Location: index.php");
    exit;
}

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

$sql = "DELETE FROM playlist WHERE id='$id' LIMIT 1";
$result = $conn->query($sql);
$conn->close();
header("Location: index.php");
exit;

?>