<?php

$route = isset($_GET['route']) ? $_GET['route'] : '';

switch ($route) {
    case '':
        include './views/home.php';
        break;
    case 'about':
        include './views/about.php';
        break;
    case 'contact':
        include './views/contact.php';
        break;
    default:
        include '404.php'; 
        break;
}
