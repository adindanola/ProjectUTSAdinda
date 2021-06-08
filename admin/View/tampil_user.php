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

    <title>PASAR BUAH</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary fixed stop">
        <a class="navbar-brand text-white" href="#">PASAR BUAH | Admin</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
        <li><a href="../../login.php">Log Out</a></li>
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
                    <a class="nav-link active text-white" href="../View/tampil_user.php"><i class="fas fa-users mr-2"></i>Daftar User</a>
                    <hr class="bg-warning">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./View/tampil_buah.php"><i class="fas fa-university mr-2"></i>Daftar Buah</a>
                    <hr class="bg-warning">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../View/tampilorder.php"><i class="fas fa-file-contract mr-2"></i>Daftar Pemesanan Buah</a>
                    <hr class="bg-warning">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 ">
            <h3><i class="fas fa-users mr-2"></i> Daftar User </h3>
            <hr>
<?php

include '../Model/databaseuser.php';
$db = new database ();
?>
<a href ="../View/inputuser.php">Tambah User</a>
<table border="1">
<tr>
<th>No</th>
<th>Nama</th>
<th>Nama User</th>
<th>Password</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php
$no = 1;
foreach ($db->tampil_data() as $x) {
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $x['nama']; ?></td>
<td><?php echo $x['username']; ?></td>
<td><?php echo $x['password']; ?></td>
<td><?php echo $x['level']; ?></td>
<td>
<a href="../View/edituser.php?id=<?php echo $x['id_pengguna']; ?>">Edit Data |</a>
<a href="../Controler/prosesuser.php?id=<?php echo $x['id_pengguna']; ?>&aksi=hapus">Hapus Data</a>
</td>
</tr>
<?php
}
?>