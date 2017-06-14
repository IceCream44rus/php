<?php
    include ("../base/db.php");
    if (isset($_GET['id'])); {$id=($_GET['id']);}
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
    <title>Прочитать меню</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <a href="index.php">Вернуться</a>
    <?if (isset($id)):?>
            <?=$id?>
            <?$all_menu = mysqli_query($db , "SELECT * FROM eat WHERE id='$id'");
            $menu = mysqli_fetch_array($all_menu);
            $time_id = $menu['$time_id'];
            ?>
    <form action="edit_meal.php" method="POST" name="edit_meal">
        <label for="food">Название</label>
        <input type="text" name="food" placeholder="Название блюда" id="food" value="<?=$menu['food']?>">
        <label for="weight">Вес</label>
        <input type="text" id="weight" name="weight" placeholder="Вес" value="<?=$menu['weight']?>">
        <label for="price">Цена</label>
        <input type="text" id="price" name="price" placeholder="Цена" value="<?=$menu['price']?>">
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
        <input type="hidden" id="food" name="id" value="<?=$id?>">
        <button type="submit">Сохранить</button>
    </form>
    <?else:?>
    <div class="container all_meal">
    <?php
        $all_menu = mysqli_query( $db , "SELECT * FROM eat");
        $menu = mysqli_fetch_array($all_menu);
        do {
            printf ( "<p><a href='read_meal.php?id=%s'> %s , %s , %s , %s</a></p>" , $menu['id'], $menu['food'], $menu['weight'], $menu['price'], $menu['time_id']);
        }
        while ($menu = mysqli_fetch_array($all_menu));
    ?>
    </div>
    <?endif?>
    <div class="seasons">
        <div class="breakfast">
            <h1>Горячее</h1>
            <?
            $all_menu = mysqli_query( $db , "SELECT * FROM eat");
            $menu = mysqli_fetch_array($all_menu);
            do { if ($menu['time_id']==1) {
                printf ("<p><a href='read_meal.php?id=%s'> '%s' , '%s' , '%s'</a></p>" , $menu['id'], $menu['food'], $menu['weight'], $menu['price']);
                $all_eat[]=$menu['price'];
            }
            }
            while ($menu = mysqli_fetch_array($all_menu));
            ?>
        </div>
        <div class="lunch">
            <h1>Холодное</h1>
            <?
            $all_menu = mysqli_query( $db , "SELECT * FROM eat");
            $menu = mysqli_fetch_array($all_menu);
            do { if ($menu['time_id']==2) {
                printf ("<p><a href='read_meal.php?id=%s'> '%s' , '%s' , '%s'</a></p>" , $menu['id'], $menu['food'], $menu['weight'], $menu['price']);
                $all_eat[]=$menu['price'];
            }
            }
            while ($menu = mysqli_fetch_array($all_menu));
            ?>
        </div>
    </div>
    <div class="dinner">
        <h1>Гарниры</h1>
        <?
        $all_menu = mysqli_query( $db , "SELECT * FROM eat");
        $menu = mysqli_fetch_array($all_menu);
        do {
            if ($menu['time_id']==3) {
                printf ("<p><a href='read_meal.php?id=%s'> '%s' , '%s' , '%s'</a></p>" , $menu['id'], $menu['food'], $menu['weight'], $menu['price']);
                $all_eat[]=$menu['price'];
        }
        }
        while ($menu = mysqli_fetch_array($all_menu));
        ?>
    </div>
    <div class="dinner">
        <h1>Салаты</h1>
        <?
        $all_menu = mysqli_query( $db , "SELECT * FROM eat");
        $menu = mysqli_fetch_array($all_menu);
        do {
            if ($menu['time_id']==4) {
                printf ("<p><a href='read_meal.php?id=%s'> '%s' , '%s' , '%s'</a></p>" , $menu['id'], $menu['food'], $menu['weight'], $menu['price']);
                $all_eat[]=$menu['price'];
            }
        }
        while ($menu = mysqli_fetch_array($all_menu));
        ?>
    </div>
    <?
    $all_eat[]=$menu['price'];
            echo "Всего блюд:". count($all_eat). "<br />";
            echo "Стоимость за все блюда:". array_sum($all_eat)."руб";
    ?>
    </div>
</body>
</html>