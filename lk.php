<?php

session_start();

# Если пользователь не авторизован
if (!isset($_SESSION['is_auth'])) {
    header('Location: login.php');
    exit;
}

$title = 'Личный кабинет';

echo 'LK';
