<?php
// membuka session start
session_start();
// menghubungkan file config database
require '../database/config.php';

// menampung value inputan yang dikirim dari form kedalam variabel
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

if(empty($name) || empty($price) || empty($description)){
    $_SESSION['validation'] = 'Inputan tidak boleh kosong';
    header('location:../index.php?page=addproduct');
}else{
    if(is_numeric($price)){
        // melakukan query insert data kedalam database
        $query = mysqli_query($con, "update tb_product 
        set name='$name', price='$price', description='$description' where id=".$id);
        // melakukan pengecekan lalu redirect halaman product
        if ($query) {
        // membuat session pesan untuk bisa ditampilkan di halaman product
        $_SESSION['pesan'] = 'Edit Product Successfully';
        header('location:../index.php?page=product');
        } else {
        // membuat session pesan error untuk ditampilkan di halaman product
        $_SESSION['pesan'] = 'Error';
        header('location:../index.php?page=product');
        }
    }else{
        $_SESSION['validation'] = 'Inputan Price Harus Angka';
        header('location:../index.php?page=addproduct');
    }
}