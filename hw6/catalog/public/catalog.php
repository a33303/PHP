<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "base.php";


/*
 *  1. Получить ид из запроса
 *  2. Подключится к базе
 *  3. Составить запрос на получение данных по ид
 *  4. выполнить запрос и сохранить данные в переменную.
 *  5. Подставить полученные данные в шаблон
 */

$id = (int) get('id');
$image = getGalleryImageById($id);
$catalog = getCatalog($id);

include VIEWS_DIR . 'photo.php';
include VIEWS_DIR . 'catalog.php';
?>



