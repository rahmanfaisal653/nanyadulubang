<?php
include "koneksi.php";
session_start();


$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
$data  = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['pass'])) {
   
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
	header("Location: konten/dashboard.php");
    
} else {
    echo "Login gagal. Username atau password salah.";
}
?>