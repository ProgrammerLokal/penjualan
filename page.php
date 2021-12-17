<?php
// mengambil session role lalu ditampung kedalam variabel role
$role = $_SESSION['role'] ?? '';
// $role = $_SESSION['role'] ? $_SESSION['role'] : '';
// menghubungkan file config
include 'database/config.php';
// mengambil reqest get dengan nama page
$page = isset($_GET['page']) ? $_GET['page'] : '';

if ($role == 'admin') {
    switch ($page) {
        case 'about':
            include 'content/about.php';
            break;
        case 'product':
            include 'content/product.php';
            break;
        case 'users':
            include 'content/users.php';
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
} else {
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
}
