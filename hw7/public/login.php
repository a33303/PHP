<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR . "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = post('login');
    $password = hash(post('password'));


    if($user = queryOne($sql)) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        redirect('/products/account.php');
    } else {
        echo "Не авторизованы!";
    }
}

$sql = "SELECT * FROM users 
            WHERE login = '{$login}' 
            AND password = '{$password}'";

include VIEWS_DIR . '/products/login.php';
?>


