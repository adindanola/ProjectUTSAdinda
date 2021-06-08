<?php
include '../Model/databaseorder.php';
$db = new database();
 
$aksi = $_GET['aksi'];
if($aksi == "tambah"){
		$db->input($_POST['nama_user'],$_POST['id_order'],$_POST['email'],$_POST['phone']);
		header("location:../View/tampilorder.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id_order']);
	header("location:../View/tampilorder.php");
}elseif($aksi == "update"){
	$db->update($_POST['id_order'],$_POST['nama_kos'],$_POST['id'],$_POST['tgl_pembayaran'],$_POST['kode_pemesanan']);
	header("location:../View/tampilorder.php");
}else if($aksi == "order"){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $db -> insert_buah($nama, $jumlah);
    header('location:../view/waiting.php');
}
?>
 