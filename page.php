<?php
// menghubungkan file config
include 'database/config.php';
// mengambil reqest get dengan nama page
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'about':
        include 'content/about.php';
        break;
    case 'login':
        include 'content/login.php';
        break;
    case 'product':
        include 'content/product.php';
        break;
    default:
        include 'content/home.php';
}
