<?php

# Задание 3

$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? Потому что происходит неточное сравнение, которое приводит к выводу: 5 = 5
var_dump((int)'012345');                        // Почему 12345? Поточу что int перевод текстовое значение в числовое 
var_dump((float)123.0 === (int)123.0); // Почему false? Потому что float это значение с запятой, а int это точное значение, следовательно при точном сравнение - false
var_dump((int)0 === (int)'hello, world'); // Почему true? Intenger переводит 0 в false, текст тоже в false. Далее происходит точное сравнение, что приводит к true.

?>

