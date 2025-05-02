<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data komunitas
    $result = mysqli_query($conn, "SELECT cover, images FROM tb_komunitas WHERE id_komunitas = '$id'");
    $data = mysqli_fetch_assoc($result);

    if ($data) {
        // Hapus file cover
        if (!empty($data['cover']) && file_exists("konten/uploads/" . $data['cover'])) {
            unlink("konten/uploads/" . $data['cover']);
        }

        // Hapus file logo
        if (!empty($data['images']) && file_exists("konten/uploads/" . $data['images'])) {
            unlink("konten/uploads/" . $data['images']);
        }

        // Hapus data dari database
        $delete = mysqli_query($conn, "DELETE FROM tb_komunitas WHERE id_komunitas = '$id'");

        if ($delete) {
            echo "<script>alert('Komunitas berhasil dihapus.'); window.location='konten/community.php';</script>";
        } else {
            echo "<script>alert('Gagal menghapus komunitas.'); window.location='konten/community.php';</script>";
        }
    } else {
        echo "<script>alert('Data komunitas tidak ditemukan.'); window.location='konten/community.php';</script>";
    }
} else {
    echo "<script>alert('ID komunitas tidak ditemukan.'); window.location='konten/community.php';</script>";
}
?>
