<?php
// Ambil rute dari parameter GET
$route = isset($_GET['route']) ? $_GET['route'] : '';

// Tentukan rute dan tindakan yang sesuai
switch ($route) {
    case '':
        include './views/contact.php';
        break;
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include '404.php'; // Tampilkan halaman 404 jika tidak ada rute yang cocok
        break;
}
