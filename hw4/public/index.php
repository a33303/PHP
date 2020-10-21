<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/stable.php";
require_once ENGINE_DIR . "create.php";

function fileImage(string $directory): array
{
    $result = scandir($directory);
    $files = [];
    foreach ($result as $file) {
        if (in_array($file, ['.', '..'])) {
            continue;
        }
        $files[] = $file;
    }
}

$images = fileImage(IMG_DIR);

foreach ($images as $image) {
    $imgUrl = "/img/{$image}";
    echo "<a href='{$imgUrl}' target='_blank'>
            <img scr='' width='200'>
          </a>";
}

?>