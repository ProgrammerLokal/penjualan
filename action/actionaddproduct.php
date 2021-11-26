<?php
// menghubungkan file config database
require '../database/config.php';

// menampung value inputan yang dikirim dari form kedalam variabel
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

// melakukan query insert data kedalam database
$query = mysqli_query($con, "insert into tb_product(name,price,description) 
                            values('$name','$price','$description')");

// melakukan pengecekan lalu redirect halaman product
if ($query) {
    header('location:../index.php?page=product');
} else {
    header('location:../index.php?page=addproduct');
}
