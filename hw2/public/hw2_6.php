<?php

# Задание 7.Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
# 22 часа 15 минут
# 21 час 43 минуты


date_default_timezone_set('Europe/Moscow');
$time = time();
$hour = date('G', $time);
$min = date('i', $time);

$hourArr = [
    'час', 'часа', 'часов'
    # 2,3,4,22,23 часа
    # 1 час
    # остальные варианты часов
];
$minArr = [
    'минута', 'минуты', 'минут'
    # 2,3,4,22,23 минуты
    # 0 минут
    # остальные варианты минута
];

function comparison($value, $arr)
{
    if (!is_numeric($value) || !is_array($arr) || $value < 0) {
        return 'неверные данные!';
    }
    if (preg_match('/[1][1-9]/', substr($value, -2))) {
        $teen = true;
    }
    $lastNumber = $value % 10;
    if ($lastNumber == 1 && !$teen) {
        $corrText = $arr[0];
    } elseif (preg_match('/[2-4]/', $lastNumber) && !$teen) {
        $corrText = $arr[1];
    } else {
        $corrText = $arr[2];
    }

    return $value . ' ' . $corrText;
}

echo comparison($hour, $hourArr) . ' ' . comparison($min, $minArr);










?>