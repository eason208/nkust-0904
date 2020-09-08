<?php
  session_start();
  //先從Session中取出user_type
  //以備後續確認瀏覽者的身份別
  $user_type = $_SESSION["user_type"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
    body {
        font-family:微軟正黑體;
    }
</style>
<title>我的播放清單~~</title>
</head>
<body style="background-color:powderblue;">   
<h2>我的播放清單</h2>
<hr>
<?php include "../includes/menu.php"; ?>
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
//以下建立SQL查詢指令
$sql = "SELECT * FROM playlist order by id desc";
//以下執行SQL查詢指令，並把結果傳回給$result變數
$result = $conn->query($sql);
if ($user_type==NULL) {
  //如果還沒登入的話，要顯示登入用表單
  //以下建立一個用來輸入密碼的表單
  //使用者按下「登入」之後，即會前往chkpass.php檢查密碼
  echo "<form method=POST action=chkpass.php>";
  echo "管理密碼：<input type=password name=password>";
  echo "<input type=submit value=登入>";
  echo "</form>";
} else {
  //如果已經登入的話，要有張貼訊息的表單
  echo "<form method=POST action=listpost.php>";
  echo "訊息：<input type=text name=message size=40>";
  echo "<input type=submit value=張貼>";
  echo "</form>";
  echo "<button><a href=logout.php>登出</a></button>";
}
if ($result->num_rows > 0) { //檢查記錄的數量，看看是否有資料
  // output data of each row
  echo "<table width=800 bgcolor=#ff00ff>";
  //下面這行是表格的標題列
  if ($user_type==NULL) {
    //如果未登入的話，就維持原有的標題
    echo "<tr bgcolor=#78ffff><td>播放清單</td></tr>";
  } else {
    //如果已經登入的話，就加上「貼文管理」欄位
    echo "<tr bgcolor=#78ffff><td>播放清單</td><td>貼文管理</td></tr>";
  }
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    echo "<tr bgcolor=#78ff78>";
    echo "<td><a href=tvshow.php?pid=$id>" . $row["name"]. "</a></td>"; 
    // 如果是已登入使用者，要加上貼文管理（連結）的欄位
    if ($user_type!=NULL) {
      echo "<td>";
      echo "<a href='listedit.php?id=$id'>編輯</a>";
      echo " - ";
      echo "<a href='listdelete.php?id=$id'>刪除</a>";
      echo "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results"; // 如果資料表中沒有記錄，要顯示的內容
}
$conn->close();
?>
<hr>
<?php include "../includes/footer.php"; ?>
</body>
</html>