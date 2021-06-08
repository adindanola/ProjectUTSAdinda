<?php
include '../Model/databaseBuah.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama_buah'],$_POST['harga_buah'],$_POST['keterangan']);
	 header("location:../View/tampil_buah.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id_kos']);
	header("location:../View/tampil_buah.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id_buah'],$_POST['nama_buah'],$_POST['harga_buah'],$_POST['keterangan']);
 	header("location:../View/tampil_buah.php");
 }
 ?>