<?php
    include("base/db.php");
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
    <div class="container">
        <form action="results.php" method="post">
            <div class="menu">
                <div class="name_menu">
                    <div class="cooks">
                        <label for="first_cook">Первое блюдо</label>
                        <input id="first_cook" name="first_cook" type="text">
                        <select name="first_quantity">
                            <option selected hidden>Выбрать...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="cooks">
                        <label for="second_cook">Второе блюдо</label>
                        <input id="second_cook" name="second_cook" type="text">
                        <select name="second_quantity">
                            <option selected hidden>Выбрать...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="cooks">
                        <label for="three_cook_cook">Третье блюдо</label>
                        <input id="three_cook" name="three_cook" type="text">
                        <select name="three_quantity">
                            <option selected hidden>Выбрать...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="cooks">
                        <label for="four_cook">Четвертое блюдо</label>
                        <input id="four_cook" name="four_cook" type="text">
                        <select name="four_quantity">
                            <option selected hidden>Выбрать...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="cooks">
                        <label for="five_cook">Пятое блюдо</label>
                        <input id="five_cook" name="five_cook" type="text">
                        <select name="five_quantity">
                            <option selected hidden>Выбрать...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="price_menu">
                    <label for="first_price">Цена за первое блюдо</label>
                    <input id="first_price" name="first_price" type="text">
                    <label for="second_price">Цена за второе блюдо</label>
                    <input id="second_price" name="second_price" type="text">
                    <label for="three_price">Цена за третье блюдо</label>
                    <input id="three_price" name="three_price" type="text">
                    <label for="four_price">Цена за четвертое блюдо</label>
                    <input id="four_price" name="four_price" type="text">
                    <label for="five_price">Цена за пятое блюдо</label>
                    <input id="five_price" name="five_price" type="text">
                </div>
            </div>
            <div class="select">
                <select name="select">
                    <option selected hidden>Выбрать...</option>
                    <option value="Завтрак">Завтрак</option>
                    <option value="Обед">Обед</option>
                    <option value="Ужин">Ужин</option>
                </select>
            </div>
            <button type="submit">Сделать заказ</button>
        </form>
    </div>
</body>
</html>