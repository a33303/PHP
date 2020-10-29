<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/main.php";
require_once ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "base.php";
/** Вывести на экран фотографию с переданным идшником */
/*
 *  1. Получить ид из запроса
 *  2. Подключится к базе
 *  3. Составить запрос на получение данных о фото по ид
 *  4. выполнить запрос и сохранить данные в переменную.
 *  5. Подставить полученные данные в шаблон
 */

$id = (int) get('id');

$image = getGalleryImageById($id);
incrementImageViews($id);
include VIEWS_DIR . 'photo.php';
?>