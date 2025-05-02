<?php
session_start();

if (!isset($_SESSION['id_user'])) {
  header("Location: logindanregister.php");
  exit;
}

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "nanyadulubang");

if (isset($_POST['submit'])) {
    $namakomunitas = $koneksi->real_escape_string($_POST['namakomunitas']);
    $deskripsi = $koneksi->real_escape_string($_POST['deskripsi']);

    // Upload gambar
    $images = $_FILES['images']['name'];
    $tmp_images = $_FILES['images']['tmp_name'];
    $folder_images = "uploads/" . $images;
    move_uploaded_file($tmp_images, $folder_images);

    $cover = $_FILES['cover']['name'];
    $tmp_cover = $_FILES['cover']['tmp_name'];
    $folder_cover = "uploads/" . $cover;
    move_uploaded_file($tmp_cover, $folder_cover);

    // Simpan ke database
    $koneksi->query("INSERT INTO tb_komunitas (namakomunitas, images, cover, deskripsi, flag) 
                     VALUES ('$namakomunitas', '$images', '$cover', '$deskripsi', 1)");

    header("Location: konten/community.php"); // Balik ke halaman community setelah berhasil
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create a Space</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
  <h1 class="text-2xl font-bold mb-6 text-center">Create a New Space</h1>
  
  <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
    <div>
      <label class="block mb-1 font-medium">Nama Komunitas</label>
      <input type="text" name="namakomunitas" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
    </div>

    <div>
      <label class="block mb-1 font-medium">Deskripsi</label>
      <textarea name="deskripsi" required rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
    </div>

    <div>
      <label class="block mb-1 font-medium">Upload Gambar (Logo)</label>
      <input type="file" name="images" required class="w-full">
    </div>

    <div>
      <label class="block mb-1 font-medium">Upload Gambar Cover</label>
      <input type="file" name="cover" required class="w-full">
    </div>

    <button type="submit" name="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg">
      Create Space
    </button>
  </form>
</div>

</body>
</html>
