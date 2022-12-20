<?php
    include "koneksi.php";

    (!isset($_POST) || empty($_POST)) ? header('location: barang.php?pesan=Data gagal disimpan') : '';

    $nomor = $_POST['nomor'];
    $jenis_barang = $_POST['jenis_barang'];
    $brand = $_POST['brand'];
    $berat = $_POST['berat'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO barang (nomor, jenis_barang, brand, berat, stok, harga) VALUES ('$nomor','$jenis_barang','$brand', '$berat','$stok','$harga')";

    $hasil_query = mysqli_query($koneksi, $query);

    header('location: barang.php?pesan=Data sukses disimpan');

?>
