<?php

/* Задание 1. Создать форму-калькулятор с операциями:
сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль!
Выбор операции можно осуществлять с помощью тега <select>.
 * План:
 * 1 - создать форму калькулятора в html (views/calculate.html)
 * 2 - спланировать архтитектуру проекта. Я решил сделать папки public, engine и views.
 * 3 - /public/index.php – здесь будет храниться форма калькулятора.
 * 4 - /engine/computation.php - тут будет храниться логика вычислений
 * 5 - /views/calculate.php - вывод результата вычисления.
 */

?>

<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/views/calculate.php">
    <input type="text" name="num1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="num2">
    <input type="submit" value="Посчитать">
</form>
</body>
</html>