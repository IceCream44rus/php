<?php
    include ("../base/db.php");
    if (isset($_POST['food'])) {$food=$_POST['food']; if ($food == "") {unset($food);}}
    if (isset($_POST['weight'])) {$weight=$_POST['weight']; if($weight== "") {unset($weight);}}
    if (isset($_POST['price'])) {$price=$_POST['price']; if($price=="") {unset($weight);}}
    if (isset($_POST['time_id'])) {$time_id=$_POST['time_id']; if ($time_id=="") {unset($time_id);}}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление блюда</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<? if (isset ($food) || isset($weight) || isset($price) || isset($time_id)):?>
<?    {
        $myrow_food = mysqli_query($db , "INSERT INTO eat(food,weight,price,time_id) VALUES ('$food' ,'$weight' ,'$price','$time_id')");
        if (isset($myrow_food)) {
            echo "<p>Блюда добавлены в список <a href='add_meal.php'>Добавить ещё</a></p>";
        }
        else {
            echo "<p>Не вышло!</p>";
        }
    }
?>
<?else:?>
<a href="index.php">Вернуться в Управление</a>
    <div class="container">
        <form action="add_meal.php" name="add_meal" method="POST" class="add_meal">
            <label for="food">Название продукта</label>
            <input type="text" id="food" name="food" placeholder="Введите название">
            <label for="weight">Вес</label>
            <input type="text" name="weight" id="weight" placeholder="Укажите вес">
            <label for="price">Цена</label>
            <input type="text" id="price" name="price" placeholder="Укажите цену">
            <select name="time_id">
                <?
                    $myrow=mysqli_query($db ,"SELECT * FROM season");
                    $result=mysqli_fetch_array($myrow);
                    do {
                        printf ("<option value=\"%s\">%s</option>" ,$result['id'],$result['time']);
                    }
                    while ($result= mysqli_fetch_array($myrow));
                ?>
            </select>
            <button type="submit">Добавить</button>
            <?endif?>
        </form>
    </div>
</body>
</html>