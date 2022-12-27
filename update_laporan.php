<?php
include "koneksi.php";

$id_barang = $_GET['id_barang'];

(!isset($npm) || empty($npm)) ? header('location: laporan.php?pesan=Data gagal diupdate') : '';

$Tanggal = $_POST['Tanggal'];
$nm_barang = $_POST['nm_barang'];
$Merk = $_POST['Merk'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];

$query = "UPDATE laporan SET Tanggal = '$Tanggal', nm_barang ='$nm_barang', Merk ='$Merk', masuk = '$masuk', keluar ='$keluar' WHERE id_barang =$id_barang ";

$hasil_query = mysqli_query($koneksi, $query);

header('location: laporan.php?pesan=Data sukses diupdate');
?>