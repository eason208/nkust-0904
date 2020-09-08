<?php

$id= $_POST["id"];
$title= $_POST["title"];
$pid = $_GET["pid"];
echo $pid;

if($id==NULL){
    header("Location: tvshow.php?pid=$pid");
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

$sql = "UPDATE video SET title='$title' WHERE id='$id' LIMIT 1";
$result = $conn->query($sql);
$conn->close();
header("Location: tvshow.php?pid=$pid");
exit;


?>