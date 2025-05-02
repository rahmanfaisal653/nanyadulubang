<?php
session_start();
include 'koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['id_user'])) {
    echo 'Not logged in';
    exit;
}

// Ambil ID user login dan target user
$id_follower = $_SESSION['id_user'];              // yang follow
$id_user = intval($_POST['id_user']);             // yang di-follow

// Cegah follow diri sendiri
if ($id_user == $id_follower) {
    echo 'Cannot follow yourself';
    exit;
}

// Cek apakah sudah follow
$cek = mysqli_query($conn, "SELECT * FROM tb_follower WHERE id_user='$id_user' AND id_follower='$id_follower'");

// Jika sudah follow, hapus (unfollow)
if (mysqli_num_rows($cek) > 0) {
    mysqli_query($conn, "DELETE FROM tb_follower WHERE id_user='$id_user' AND id_follower='$id_follower'");
    echo 'unfollowed';
} else {
    // Jika belum follow, insert
    mysqli_query($conn, "INSERT INTO tb_follower (id_user, id_follower) VALUES ('$id_user', '$id_follower')");
    echo 'followed';
}
?>
