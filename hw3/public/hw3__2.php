<?php

/* ex. 2  С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.*/

$b = 10;
$a = 0;
function outputNum($a){
    if ($a == 0) {
        return "$a" . '- это ноль' . '<br>';
    }
    if ($a % 2) {
        return "$a" . '- нечетное число' . '<br>';
    } else {
        return "$a" . '- четное число' . '<br>';
    }
}

do {
    echo outputNum($a);
    $a++;
} while ($a <= $b);

?>