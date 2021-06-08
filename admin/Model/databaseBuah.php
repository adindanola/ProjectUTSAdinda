<?php
class database{
 	var $host = "localhost";
 	var $uname= "root";
 	var $pass = "";
 	var $db   = "pasarbuah";
 	var $con ;

 	function __construct(){
 		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db); mysqli_select_db($this->con,$this->db);
 	}
 	function tampil_data(){
 		$data = mysqli_query($this->con,"select * from buah");
 		while($d=mysqli_fetch_array($data)){
 			$hasil[]=$d;
 		}
 		return $hasil;
 	}
 	function input($nama_buah,$harga_buah,$keterangan){
      mysqli_query($this->con,"INSERT INTO `buah` (`nama_buah`,`harga_buah`, `keterangan') VALUES 
      ('$nama_buah','$harga_buah','$keterangan');)");
 	}
 	function hapus($id_buah){
      mysqli_query($this->con,"delete from buah where id_buah='$id_buah'");
  }
  function edit($id_buah){
    $data = mysqli_query($this->con,"select * from buah where id_buah='$id_buah'");
    while($d = mysqli_fetch_array($data)){
      $hasil[] = $d;
    }
    return $hasil;
  }
function update($id_buah,$nama_buah,$harga_buah,$keterangan){
	mysqli_query($this->con,"update buah set nama_buah='$nama_buah', harga_buah='$harga_buah', keterangan='$keterangan'");
  }
} 
?>