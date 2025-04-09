<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Ambil data user
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
$data  = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['pass'])) {
    // Login berhasil
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['grup'] = $data['grup'];

    echo "Login berhasil. <a href='dashboard.php'>Masuk</a>";
} else {
    echo "Login gagal. Username atau password salah.";
}
?>