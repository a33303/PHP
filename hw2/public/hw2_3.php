<?php

# Задание 4.  Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов,
# $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций
# (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function sum($arg1, $arg2){
    return $arg1 + $arg2;
}

function dif($arg1, $arg2){
    return $arg1 - $arg2;
}

function mul($arg1, $arg2){
    return $arg1 * $arg2;
}

function div($arg1, $arg2){
    if ($arg2 == 0) {
        return 'Деление на 0!';
}
        return round($arg1 / $arg2, 2);
}

function mathOperation($arg1, $arg2, $operation){
    $result = 0;
    switch ($operation) {
        case 'sum':
            $result = sum($arg1, $arg2);
            break;
        case 'dif':
            $result = dif($arg1, $arg2);
            break;
        case 'mul':
            $result = mul($arg1, $arg2);
            break;
        case 'div':
            $result = div($arg1, $arg2);
            break;
    }
    return $result;
}

echo mathOperation($a, $b, 'sum');
echo '<br>';
echo mathOperation($a, $b, 'dif');
echo '<br>';
echo mathOperation($a, $b, 'mul');
echo '<br>';
echo mathOperation($a, $b, 'div');

?>
