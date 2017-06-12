<?php
    include ("../base/db.php");
    if (isset($_POST['id']))  {$id=$_POST['id']; }
    if (isset($_POST['food']))  {$food=$_POST['food']; }
    if (isset($_POST['weight']))  {$weight=$_POST['weight']; }
    if (isset($_POST['price']))  {$price=$_POST['price'];  }
    if (isset($_POST['time_id'])) {$time_id=$_POST['time_id']; }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактировать</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Вернуться</a>
<?
    $all_menu=mysqli_query($db, "UPDATE eat SET food='$food',  weight='$weight', price='$price' WHERE id='$id' ");
    if($all_menu==true) {
        echo "<p> Блюдо $food успешно обновлено</p>";
    }
    else {
        echo "<p>Блюдо не обновлено!</p>";
    }
?>
</body>
</html>