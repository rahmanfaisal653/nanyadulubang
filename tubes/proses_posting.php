<?php
session_start();
include "koneksi.php";

if(isset($_POST['kirim'])){
	
	$id_user = $_SESSION['id_user'];
	$judul = $_POST['judul'];
	$konten = $_POST['konten'];
	$tag = $_POST['tag'];
	
	$sql = "INSERT INTO tb_posting (id_user, judul, konten, tag) VALUES ('$id_user','$judul','$konten','$tag')";
	$result = mysqli_query($conn,$sql);
	
	if($result){
		echo '<div style="color:green; padding:10px; border:1px solid green; margin:10px 0;">
                Posting berhasil dibuat!
              </div>';
			  header("Location: konten/profil.php");
			  exit;
	} else {
        // Jika gagal, tampilkan pesan error
        echo '<div style="color:red; padding:10px; border:1px solid red; margin:10px 0;">
                Gagal membuat posting: '.mysqli_error($conn).'
              </div>';
    }
}

?>