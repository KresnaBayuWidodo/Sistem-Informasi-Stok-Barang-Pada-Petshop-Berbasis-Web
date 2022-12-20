<?php
    include "koneksi.php";

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi, "select * from barang where jenis_barang like '%".$cari."%'");				
	}else{
		$data = mysqli_query($koneksi,"select * from barang");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data))
?>