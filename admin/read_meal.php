<?php
    include ("../base/db.php");
    if (isset($_GET['id'])); {$id=($_GET['id']);}
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
        <input type="text" name="food" placeholder="Название блюда" id="food" value=<?=$menu['food']?>>
        <label for="weight">Вес</label>
        <input type="text" id="weight" name="weight" placeholder="Вес" value=<?=$menu['weight']?>>
        <label for="price">Цена</label>
        <input type="text" id="price" name="price" placeholder="Цена" value=<?=$menu['price']?>>
        <input type="hidden" id="food" name="id" value=<?=$id?>>
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
</body>
</html>