<?php

#Задание 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

$a = rand (-10, 10);
$b = rand (-10, 10);

function mul($a, $b) {
    return $a * $b;
}

function sum($a, $b) {
    return $a + $b;
}

function dif($a, $b) {
    return $a - $b;
}

function div($a, $b) {
    if ($a == 0) {
        return 'производится деление на 0';
    }
    return round($a / $b, 2);
}

echo mul($a, $b);
echo '<br>';
echo sum($a, $b);
echo '<br>';
echo dif($a, $b);
echo '<br>';
echo div($a, $b);

?>