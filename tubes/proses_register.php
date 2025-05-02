<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $passwordBaru = $_POST['pass'];

    // Enkripsi password baru
    $hashedPassword = password_hash($passwordBaru, PASSWORD_DEFAULT);

    // Update password di database
    $query = "UPDATE tb_user SET pass='$hashedPassword' WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "Password berhasil direset!";
    } else {
        echo "Gagal reset password. Email tidak ditemukan.";
    }
}
?>