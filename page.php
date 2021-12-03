<?php
// menghubungkan file config
include 'database/config.php';
// mengambil reqest get dengan nama page
$page = isset($_GET['page']) ? $_GET['page'] : '';

switch ($page) {
    case 'about':
        include 'content/about.php';
        break;
    case 'product':
        include 'content/product.php';
        break;
    case 'addproduct':
        include 'content/addproduct.php';
        break;
    case 'editproduct':
        include 'content/editproduct.php';
        break;
    default:
        include 'content/home.php';
}
