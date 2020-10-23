<?php

function createMenu(array $menu)
{
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li><a href=\"#\">{$item}</a></li>";
    }
    echo "</ul>";
}

?>