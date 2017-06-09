<?php
    include ("../base/db.php");
    if (isset($_GET['id']));{$id=$_GET['id'];}
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
    <div class="container">
        <? if (isset($id)):?>
            <?
            $all_menu=mysqli_query($db, "DELETE FROM eat WHERE id='$id'");
            if ($all_menu==true) {
                echo "<p> Блюдо удалено</p>";
            } else {
                echo "<p> Блюдо НЕ удалено</p>";
            }
            ?>
        <?else:?>
            <?
            $menu=mysqli_query($db,"SELECT * FROM eat");
            $all_menu=mysqli_fetch_array($menu);
            do {
                printf ("<p> <a href='del_meal.php?id=%s'>%s %s %s %s </a></p>", $menu['id'], $menu['food'], $menu['weight'], $menu['price'], $menu['time_id'] );
            }
            while ($menu=mysqli_fetch_array($all_menu)) ;
            ?>
        <?endif?>
    </div>
</body>
</html>