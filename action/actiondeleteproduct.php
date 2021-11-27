<?php
session_start();
require_once '../database/config.php';

$kode_product = $_GET['kode_product'];

$query = mysqli_query($con,"delete from tb_product where id=".$kode_product);

 // melakukan pengecekan lalu redirect halaman product
 if ($query) {
    // membuat session pesan untuk bisa ditampilkan di halaman product
    $_SESSION['pesan'] = 'Delete Product Successfully';
    header('location:../index.php?page=product');
    } else {
    // membuat session pesan error untuk ditampilkan di halaman product
    $_SESSION['pesan'] = 'Error';
    header('location:../index.php?page=product');
    }