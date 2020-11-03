<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/main.php";
require_once ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "files.php";


//Сделать страницу с отображением превью всех фотографий из галереи
/*
Получить список изображений из БД
    1. Подключиться к серверу БД
    2. Составить запрос на выборку все строк из таблицы с картинками
    3. Выполнить запрос сохранив данные в массив.

Вывести все изображения из списка
    в цикле перебрать элементы массива
    для каждого элемента вывести верстку. */

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadFile('image', IMG_DIR);
    $filename = $_FILES['image']['name'];
    addImage($filename, $filename);
}

$images = getGalleryImages();
include VIEWS_DIR . "gallery.php";