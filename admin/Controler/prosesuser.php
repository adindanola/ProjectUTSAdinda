<?php
include '../Model/databaseuser.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
	$nama = $_POST['nama'];
	$username = $_POST['username'];
    $password = $_POST['password'];
	$level = $_POST['level'];
 	$db->input($nama, $username, $password, $level);
 	header("location:../View/tampil_user.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:../View/tampil_user.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id_pengguna'],$_POST['nama'],$_POST['username'],$_POST['password'],$_POST['level']);
 	header("location:../View/tampil_user.php");
 }else if($aksi == "loginapi"){
    header('location:../../user/index.php');
} else if($aksi=="regis"){
    $nama = $_POST['name'];
    $password = $_POST['password'];
$db -> insert_user($nama, $password);
header('location:../index.php');
}
 ?>