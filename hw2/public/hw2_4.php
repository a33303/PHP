<?php

# Задание 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home work 2_5</title>
</head>
<body>
    <h1>Title 1</h1>
    <p>Content</p>
</body>
<footer style="text-align: center">&copy; <?= date('Y') ?></footer>
</html>
