<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <style>
		body{
			background-image:url(wal1.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:white;
		}
	</style>

    <title>TOKO BUAH</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary fixed stop">
        <a class="navbar-brand text-white" href="#">TOKO BUAH | Admin</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="icon ml-4">
            <h5>
                <i class="fa fa-envelope mr-3 text-white" data-toggle="tooltip" title="Surat Masuk"></i>
                <i class="fa fa-bell mr-3 text-white" data-toggle="tooltip" title="Notifikasi"></i>
                <i class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Sign Out"></i>
            </h5>
        </div>
        </div>
    </nav>

    <div class="row no-gutters">
        <div class="col-md-0 bg-info pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item ">
                    <a class="nav-link active text-white" href="../View/dashboard.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                    <hr class="bg-warning">
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="../View/tampiluser.php"><i class="fas fa-users mr-2"></i>Daftar User</a>
                    <hr class="bg-warning">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../View/tampilkampus.php"><i class="fas fa-university mr-2"></i>Daftar Buah</a>
                    <hr class="bg-warning">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="tampilorder.php"><i class="fas fa-file-contract mr-2"></i>Daftar Pemesanan Buah</a>
                    <hr class="bg-warning">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 ">
            <h3><i class="fas fa-users mr-2"></i> Daftar User </h3>
            <hr>
<?php
include '../Model/databaseuser.php';
$db = new database();
?>
<form action="../Controler/prosesuser.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama User</td>
		<td>
			<input type="hidden" name="id_pengguna" value="<?php echo $d['id_pengguna'] ?>">
			<input type="text" name="username" value="<?php echo $d['username'] ?>">
		</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="text" name="password" value="<?php echo $d['password'] ?>"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td><input type="text" name="level" value="<?php echo $d['level'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>