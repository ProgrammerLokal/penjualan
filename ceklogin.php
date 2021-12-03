<?php
// untuk memulai sebuah session
session_start();
// menyambungkan file config.php yang ada didalam folder database
require_once 'database/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if (empty($username) || empty($password)) {
    // mencetak sebuah session dengan nama pesan
    $_SESSION['pesan'] = 'Inputan Username atau Password tidak boleh kosong';
    // lalu arahakan ke halaman login.php
    header('location:login.php');
} else {
    // lakukan query kedalam database berdasarkan inputan username dan password
    $query = mysqli_query($con, "select * from tb_users where username='$username' and password='$password'");
    // hasil dari query kita ubah kebentuk array
    $row = mysqli_fetch_assoc($query);
    // dilakukan pengcekan 
    if ($row != null) {
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        header('location:index.php');
    } else {
        // mencetak sebuah session dengan nama pesan
        $_SESSION['pesan'] = 'Inputan Username atau Password tidak cocok';
        // lalu arahakan ke halaman login.php
        header('location:login.php');
    }
}
