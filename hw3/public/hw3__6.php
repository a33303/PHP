<?php

/* ex. 6 В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом.
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. */

$navbar = [
    'Menu_1',
    'Menu_2' => ['подменю_1', 'подменю_2', 'подменю_3'],
    'Menu_3' => ['подменю_1', 'подменю_2', 'подменю_3'],
];

function menuRender($navbar)
{

    if (!is_array($navbar)) {
        return 'incorrect argument';
    }

    $renderArr[] = '<ul>';
    foreach ($navbar as $key => $value) {
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($navbar);

?>