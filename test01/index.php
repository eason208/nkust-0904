<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <style>
    body{
        font-family: 微軟正黑體;
    }
 </style>

  <title>謝呈易的0903</title>
</head>
<body style="background-color:powderblue;">
     <h2>0903，PHP練習1:生日詢問表單</h2>
    <hr>

    <?php 
    include "../includes/menu.php";
    ?> 
    <hr>


    <form method="POST" action="response.php">
        民國
        <select name=year>
            <?php
            for($i=109; $i>=40; $i--){
            echo "<option value=$i>$i</option>";
            }
            ?>
        </select>年
        <select name=month>
            <?php
            for($i=12; $i>=1; $i--){
            echo "<option value=$i>$i</option>";
            }
            ?>
            
        </select>月
        <select name=day>
            <?php
            for($i=31; $i>=1; $i--){
            echo "<option value=$i>$i</option>";
        }
           ?>
            
        </select>日        
        <input type="submit">
    </form>
    
    <hr>

    <?php include "../includes/footer.php";?>

</body>
</html>

