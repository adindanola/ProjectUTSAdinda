<?php
$conn = mysqli_connect("localhost", "root", "", "pasarbuah");
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
		$data = mysqli_query($this->con,"select * from pengorderan");
		while($d=mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}
	function input($nama_kos,$id,$tgl_pembayaran,$kode_pemesanan){
	 mysqli_query($this->con,"INSERT INTO `pengorderan` (`id_order`, `nama_kos`, `id`, `tgl_pembayaran`, `kode_pemesanan`) VALUES (NULL, '$nama_kos', '$id', '$tgl_pembayaran', '$kode_pemesanan')");
	}
	function hapus($id_order){
	 mysqli_query($this->con,"delete from pengorderan where id_order='$id_order'");
 }
 function edit($id_order){
   $data = mysqli_query($this->con,"select * from pengorderan where id_order='$id_order'");
   while($d = mysqli_fetch_array($data)){
	 $hasil[] = $d;
   }
   return $hasil;
 }
function update($id_order,$nama_kos,$id,$tgl_pembayaran,$kode_pemesanan){
   mysqli_query($this->con,"update pengorderan set nama_kos='$nama_kos', id='$id',tgl_pembayaran='$tgl_pembayaran' where id_order='$id_order'");
 }
}
function insert_buah($nama, $jumlah){
	mysqli_query($this->con, "insert into pesan values ('','$nama', '$jumlah')");
}
?>

