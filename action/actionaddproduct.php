<?php
// membuka session start
session_start();
// menghubungkan file config database
require '../database/config.php';

// menampung value inputan yang dikirim dari form kedalam variabel
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

if(empty($name) || empty($price) || empty($description)){
    $_SESSION['validation'] = 'Inputan tidak boleh kosong';
    header('location:../index.php?page=addproduct');
}else{
    if(is_numeric($price)){
        // melakukan query insert data kedalam database
        $query = mysqli_query($con, "insert into tb_product(name,price,description) 
        values('$name','$price','$description')");

        // melakukan pengecekan lalu redirect halaman product
        if ($query) {
        // membuat session pesan untuk bisa ditampilkan di halaman product
        $_SESSION['pesan'] = 'Add Product Successfully';
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