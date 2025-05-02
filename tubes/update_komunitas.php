<?php
session_start();
include "koneksi.php";

// Ambil id dari URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id === null) {
    echo "ID komunitas tidak ditemukan.";
    exit;
}

// Ambil data komunitas dari database
$query = "SELECT * FROM tb_komunitas WHERE id_komunitas = $id"; // Perbaiki kolom di sini
$hasil = mysqli_query($conn, $query);

if (mysqli_num_rows($hasil) > 0) {
    $data = mysqli_fetch_assoc($hasil);
} else {
    echo "Komunitas tidak ditemukan.";
    exit;
}

// Jika tombol simpan ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['namakomunitas'];
    $deskripsi = $_POST['deskripsi'];

    // Jika ada upload cover baru
    if ($_FILES['cover']['name'] != "") {
        $cover = $_FILES['cover']['name'];
        $cover_tmp = $_FILES['cover']['tmp_name'];
        move_uploaded_file($cover_tmp, "uploads/$cover");
    } else {
        $cover = $data['cover']; // Gunakan cover yang lama jika tidak ada yang baru
    }

    // Jika ada upload logo baru
    if ($_FILES['images']['name'] != "") {
        $logo = $_FILES['images']['name'];
        $logo_tmp = $_FILES['images']['tmp_name'];
        move_uploaded_file($logo_tmp, "uploads/$logo");
    } else {
        $logo = $data['images']; // Gunakan logo yang lama jika tidak ada yang baru
    }

    // Query update ke database
    $update_query = "UPDATE tb_komunitas SET namakomunitas='$nama', deskripsi='$deskripsi', cover='$cover', images='$logo' WHERE id_komunitas=$id"; // Perbaiki kolom di sini
    
    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Data berhasil diupdate'); window.location='konten/community.php';</script>";
    } else {
        echo "Gagal update. Error: " . mysqli_error($conn);
    }
}
?>

<h2 style="text-align: center; color: #000; font-size: 24px; font-weight: bold; margin-bottom: 20px;">Edit Komunitas</h2>

<form action="" method="post" enctype="multipart/form-data" style="width: 100%; max-width: 450px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); font-family: Arial, sans-serif;">

    <!-- Nama Komunitas -->
    <label style="font-weight: 600; color: #000; display: block; margin-bottom: 4px;">Nama Komunitas</label>
    <input type="text" name="namakomunitas" value="<?php echo $data['namakomunitas']; ?>" style="width: 100%; padding: 10px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px; margin-bottom: 15px;">

    <!-- Deskripsi -->
    <label style="font-weight: 600; color: #000; display: block; margin-bottom: 4px;">Deskripsi</label>
    <textarea name="deskripsi" style="width: 100%; padding: 10px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px; resize: vertical; min-height: 120px; margin-bottom: 15px;"><?php echo $data['deskripsi']; ?></textarea>

    <!-- Upload Logo -->
    <label style="font-weight: 600; color: #000; display: block; margin-bottom: 4px;">Upload Gambar (Logo)</label>
    <input type="file" name="images" style="margin-bottom: 15px;">

    <!-- Upload Cover -->
    <label style="font-weight: 600; color: #000; display: block; margin-bottom: 4px;">Upload Gambar Cover</label>
    <input type="file" name="cover" style="margin-bottom: 20px;">

    <!-- Tombol Simpan -->
    <button type="submit" style="width: 100%; background-color: #ffd100; color: #000; font-weight: bold; font-size: 15px; border: none; padding: 12px; border-radius: 8px; cursor: pointer;">Simpan Perubahan</button>

</form>



