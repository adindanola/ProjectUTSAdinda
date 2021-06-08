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
 		$data = mysqli_query($this->con,"select * from pengguna");
 		while($d=mysqli_fetch_array($data)){
 			$hasil[]=$d;
 		}
 		return $hasil;
 	}
 	function input($nama,$username,$password,$level){
      mysqli_query($this->con,"INSERT INTO pengguna VALUES ('', '$nama', '$username', '$password', '$level')");
 	}
 	function hapus($id){
      mysqli_query($this->con,"delete from pengguna where id_pengguna='$id'");
  }
  function edit($id){
    $data = mysqli_query($this->con,"select * from pengguna where id_pengguna = '$id'");
    while($d = mysqli_fetch_array($data)){
      $hasil[] = $d;
    }
    return $hasil;
  }
function update($id,$nama,$username,$password,$level){
    mysqli_query($this->con,"update pengguna set nama= '$nama', username='$username',  password='$password',level='$level' where id_pengguna='$id'");
  }
  function jmluser(){
	$data=mysqli_query($this->con,"Select count(id_pengguna)as jml from pengguna");
	while($d = mysqli_fetch_array ($data)){
		$hasil[] = $d;
	  }
	  return $hasil;
 }
} 
?>