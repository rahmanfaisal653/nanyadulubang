<?php
include "koneksi.php"; // pastikan ini terhubung ke DB

$username = $_POST['username'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];

// Enkripsi password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Grup default: 1 (user biasa)
$grup = 1;

// Cek duplikat email atau username
$cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE email='$email' OR username='$username'");
if(mysqli_num_rows($cek) > 0){
    echo "Username atau Email sudah digunakan.";
    exit;
}

// Masukkan data ke database
$query = "INSERT INTO tb_user (username, pass, nama, grup, email) 
          VALUES ('$username', '$hashed_password', '$nama', '$grup', '$email')";

if(mysqli_query($conn, $query)){
    echo "Registrasi berhasil!";
} else {
    echo "Gagal registrasi: " . mysqli_error($conn);
}
?>
