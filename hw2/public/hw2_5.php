<?php

# Задание 6. *С помощью рекурсии организовать функцию возведения числа в степень.
# Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

$val = rand (2, 5);
$pow = rand (2, 5);


function power($val, $pow){
    if($pow == 1) {
        return $val;
    }

    $result = $val * power($val, $pow - 1);
    return $result;
}

echo power($val, $pow);

?>