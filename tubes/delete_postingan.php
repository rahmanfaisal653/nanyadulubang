<?php
session_start();
include "koneksi.php";
$id_user = $_SESSION['id_user'];
$id_post = $_GET['id_post'];

if(!isset($id_post)){
	echo "Postingan tidak ditemukan";
	exit();
}

$sql = "DELETE FROM tb_posting WHERE id_post = '$id_post' AND id_user = '$id_user'";
$query = mysqli_query($conn,$sql);

if($query){
	header("Location:konten/profil.php");
	exit();
} else{
	echo "Data tidak ditemukan";
}



?>