<?php
    $pid=$_GET["pid"];
   session_start();
   $user_type = $_SESSION["user_type"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <style>
    body{
        font-family: 微軟正黑體;
    }
 </style>

  <title>我的播放清單</title>
</head>
<body style="background-color:powderblue;">
<h2>選擇到的播放清單</h2>
    <hr>
    <?php include "../includes/menu.php";?> 
    <hr>
    <?php
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

$sql = "SELECT * FROM video WHERE pid='$pid'";
$result = $conn->query($sql);

if($user_type==NULL){
  echo "<form method=POST action=chkpass.php>";
  echo "張貼密碼:<input type=password name=password>";
  echo "<input type=submit value=登入>";
  echo "</form>";
}
else{
  echo "<form method=POST action=videopost.php?pid=$pid>";
  echo "標題:<input type=text name=title size=40>";
  echo "vid:<input type=text name=vid size=40>";
  echo "<input type=submit value=張貼>";
  echo "</form>";
  echo"<button><a href=logout.php>登出</a></button>";
}


if ($result->num_rows > 0) { //檢查記錄的數量，看看是否有資料
  // output data of each row
  echo "<table width=800 bgcolor=#ff00ff>";
  //下面這行是表格的標題列
  if ($user_type==NULL) {
    //如果未登入的話，就維持原有的標題
    echo "<tr bgcolor=#78ffff><td>影片標題</td><td>影片ID</td>";
  } else {
    //如果已經登入的話，就加上「貼文管理」欄位
    echo "<tr bgcolor=#78ffff><td>影片標題</td><td>影片ID</td><td>貼文管理</td></tr>";
  }
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    echo "<tr bgcolor=#78ff78>";
    echo "<td>". $row["title"]. "</td>";
    echo "<td>". $row["id"]. "</td>";
    // 如果是已登入使用者，要加上貼文管理（連結）的欄位
    if ($user_type!=NULL) {
      echo "<td>";
      echo "<a href='videoedit.php?id=$id&pid=$pid'>編輯</a>";
      echo " - ";
      echo "<a href='videodelete.php?id=$id&pid=$pid'>刪除</a>";
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}     else {
  echo "0 results";
}
$conn->close();
?>
    <hr>
<?php include "../includes/footer.php";?>

</body>
</html>