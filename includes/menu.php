<?php
    $target =$_POST["target"];
    if($target!=NULL){
     header("Location: $target") ;
     exit;
     }

    $menudata = array(
      array("name"=>"回首頁", "link"=>"/mysite/nkust-0904/index.php"),
      array("name"=>"生日詢問表單", "link"=>"/mysite/nkust-0904/test01"),
      array("name"=>"高科路透社", "link"=>"/mysite/nkust-0904/test02"),
      array("name"=>"我的播放清單", "link"=>"/mysite/nkust-0904/test03"),
      array("name"=>"高科大", "link"=>"https://www.nkust.edu.tw/")
    );
    
    
     echo "<form method=POST action=index.php>";
     echo "選單:<select name=target>";
      foreach($menudata as $item){
        echo "<option value =". $item["link"].">".$item["name"]."</option>";
      }
     echo"</select>";
     echo "<input type=submit value='提交'>";
     echo"</form>";
?>