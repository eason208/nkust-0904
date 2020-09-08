<?php

$id= $_GET["id"];
$pid=$_GET["pid"];
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

$sql ="SELECT * FROM video WHERE id='$id' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) { //檢查記錄的數量，看看是否有資料
    $row = $result->fetch_assoc();
      $id = $row["id"];
      $title = $row["title"];
      echo "以下是我找到的訊息，請修改<br>";
      echo "<form method=POST action=videoupdate.php?pid=$pid>";
      echo "<input type=hidden value=$id name=id>";
      echo "<input type=text value='$title' name='title' size=30>";
      echo "<input type=submit value=修改>";
      echo "</form>";
      echo "<a href='index.php'>不修改，直接回去</a>";
    }
  else{
     echo "找不到你要編輯的紀錄~<br>";
     echo "<a href='index.php'>回上頁</a>";
  }
  

  $conn->close();
  
?>
