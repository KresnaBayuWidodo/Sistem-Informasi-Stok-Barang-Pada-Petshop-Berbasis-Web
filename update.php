<?php
include "koneksi.php";

$nomor = $_GET['nomor'];

(!isset($npm) || empty($npm)) ? header('location: barang.php?pesan=Data gagal diupdate') : '';

$jenis_barang = $_POST['jenis_barang'];
$brand = $_POST['brand'];
$berat = $_POST['berat'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$query = "UPDATE barang SET jenis_barang = '$jenis_barang', brand ='$brand', berat = '$berat', stok ='$stok', harga ='$harga' WHERE nomor =$nomor ";

$hasil_query = mysqli_query($koneksi, $query);

header('location: barang.php?pesan=Data sukses diupdate');
?>