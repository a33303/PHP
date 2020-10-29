<?php

if (empty($_GET)) {
    return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (empty($_GET['num1']) || empty($_GET['num2'])) {
    return 'Не переданы аргументы';
}

$num1 = $_GET['num1'];
$num = $_GET['num2'];


$expression = $num1 . ' ' . $_GET['operation'] . ' ' . $num2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '%':
        $result = $num1 / $num2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;

?>