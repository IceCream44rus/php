<?php
    include ("../base/db.php");
    if (isset($_GET['id'])); {$id=($_GET['id']);}
    if (isset($_POST['food'])) {$food=$_POST['food']; if ($food == "") {unset($food);}}
    if (isset($_POST['eat'])) {$eat=$_POST['eat']; }
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
    <title>Document</title>
</head>
<body>
    <h1>Спасибо за ваш заказ!</h1>
    <?php
    $order = $_POST['eat'];
    $N = count($order);
    echo("Вы выбрали $N блюдо(д): <br/>");
    foreach ($order as $value) {
        $all_menu = mysqli_query( $db , "SELECT * FROM eat WHERE id=\"$value\"");
        $menu = mysqli_fetch_array($all_menu);
        printf("%s , %s<br>" , $menu['food'],$menu['price']);
        $all_eat[]=$menu['price'];
    }
    ?>
    <p>Стоимость заказа равна : <?=array_sum($all_eat)?></p>
</body>
</html>