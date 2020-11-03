<?php
//include "draw23.php";
/*include_once*/
//require "draw.php";

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
require_once ROOT_DIR . "engine/draw.php";

//Запись в файл
/*
$menu = [
    'Главная',
    'Корзина',
    'Доставка'
];

  $f = fopen(ROOT_DIR . '/data/menu.txt', 'w+');
foreach ($menu as $item) {
    fputs($f, $item . "\n");
}
fclose($f);*/
/*
$menu = [];
$f = fopen(ROOT_DIR . '/data/menu.txt', 'a+');
while($string = fgets($f)) {
    $menu[] = $string;
}

fclose($f);
drawMenu($menu);
*/
/*
$dir = opendir(ROOT_DIR);
while ($element = readdir($dir)) {
    if(is_dir(ROOT_DIR . "/" . $element)) {
        echo "<b>$element</b><br>";
    } else {
        echo "$element<br>";
    }
}
closedir($dir);
*/

var_dump(scandir(ROOT_DIR));

?>




