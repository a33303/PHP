<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "db.php";

function getGalleryImages() {
    return queryAll("SELECT * FROM images ORDER BY views DESC");
}

function getGalleryImageById(int $id) {
    return queryOne("SELECT * FROM images WHERE id = {$id}");
}

function incrementImageViews(int $id) {
    return execute("UPDATE images SET views = views + 1 WHERE id = {$id}");
}

function addImage(string $title, string $path) {
    $sql = "INSERT INTO images(title, path) VALUES ('{$title}','{$path}')";
    return execute($sql);
}

function getCatalog(int $id) {
    return queryAll("SELECT * FROM catalog WHERE id = {$id}");
}