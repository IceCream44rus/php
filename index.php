<?php
    include("base/db.php");
    if (isset($_POST['id']))  {$id=$_POST['id']; }
    if (isset($_POST['food']))  {$food=$_POST['food']; }
    if (isset($_POST['weight']))  {$weight=$_POST['weight']; }
    if (isset($_POST['price']))  {$price=$_POST['price'];  }
    if (isset($_POST['time_id'])) {$time_id=$_POST['time_id']; }
    if (isset($_POST['eat'])) {$eat=$_POST['eat']; }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Меню</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="menu">
            <h1>Наши блюда для заказаза</h1>
            <form action="../admin/order.php" method="post" id="index_menu">
                <div class="salats">
                    <h3>Салаты</h3>
                    <?
                    $all_menu = mysqli_query( $db , "SELECT * FROM eat");
                    $menu = mysqli_fetch_array($all_menu);
                    do {
                        if ($menu['time_id'] == 4) {
                            printf("<div><label><input type='checkbox' class=\"menu_food\" name='eat[]' value='%s'>%s,%s гр,%s руб </label></div>",$menu['food'], $menu['food'], $menu['weight'], $menu['price']);
                            $all_eat[]=$menu['price'];
                        }
                    }
                    while ($menu = mysqli_fetch_array($all_menu));
                    ?>
                </div>
                <div class="garnish">
                    <h3>Гарнир</h3>
                    <?
                    $all_menu = mysqli_query( $db , "SELECT * FROM eat");
                    $menu = mysqli_fetch_array($all_menu);
                    do {
                        if ($menu['time_id'] == 3) {
                            printf("<div><label><input type='checkbox' class=\"menu_food\" name='eat[]' value='%s'>%s,%s гр,%s руб </label></div>",$menu['food'], $menu['food'], $menu['weight'], $menu['price']);
                            $all_eat[]=$menu['price'];
                        }
                    }
                    while ($menu = mysqli_fetch_array($all_menu));
                    ?>
                </div>
                <div class="colds">
                    <h3>Холодное</h3>
                    <?
                    $all_menu = mysqli_query( $db , "SELECT * FROM eat");
                    $menu = mysqli_fetch_array($all_menu);
                    do {
                        if ($menu['time_id'] == 2) {
                            printf("<div><label><input type='checkbox' class=\"menu_food\" name='eat[]' value='%s'>%s,%s гр,%s руб </label></div>",$menu['food'], $menu['food'], $menu['weight'], $menu['price']);
                            $all_eat[]=$menu['price'];
                        }
                    }
                    while ($menu = mysqli_fetch_array($all_menu));
                    ?>
                </div>
                <div class="hots">
                    <h3>Горячее</h3>
                    <?
                    $all_menu = mysqli_query( $db , "SELECT * FROM eat");
                    $menu = mysqli_fetch_array($all_menu);
                    do {
                        if ($menu['time_id'] == 1) {
                            printf("<div><label><input type='checkbox' class=\"menu_food\" name='eat[]' value='%s'>%s,%s гр,%s руб </label></div>",$menu['food'], $menu['food'], $menu['weight'], $menu['price']);
                            $all_eat[]=$menu['price'];
                        }
                    }
                    while ($menu = mysqli_fetch_array($all_menu));
                    ?>
                </div>
                <button type="submit">Заказать</button>
            </form>
        </div>
</body>
</html>