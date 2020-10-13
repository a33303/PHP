<?php

/*ex. 1 С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.*/

$num = 1;
while ($num < 100) {
    if ($num % 3 == 0);{
        echo $num++ . "<br>";
    }
    $num++;
}

/* работает и все показывает, но выдает в конце строк такую ошибку.
Fatal error: Uncaught TypeError: Return value of trans
trace: #0 F:\OpenServer\domains\localhost\public\hw3_1.php(50): transliterate
('\xD1\x81\xD1\x82\xD1\x80\xD0\xBE\xD0\xBA\xD0\xB0') #1 {main} thrown in
F:\OpenServer\domains\localhost\public\hw3_1.php on line 48 */

?>