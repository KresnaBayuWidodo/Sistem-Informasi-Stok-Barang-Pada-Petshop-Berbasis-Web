<?php
    include "koneksi.php";

    (!isset($_POST) || empty($_POST)) ? header('location: laporan.php?pesan=Data gagal disimpan') : '';

    $id_barang = $_POST['id_barang'];
    $Tanggal = $_POST['Tanggal'];
    $nm_barang = $_POST['nm_barang'];
    $Merk = $_POST['Merk'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];

    $query = "INSERT INTO laporan (id_barang, Tanggal, nm_barang, Merk,  masuk,  keluar) VALUES ('$id_barang', '$Tanggal', '$nm_barang', '$Merk', '$masuk','$keluar')";

    $hasil_query = mysqli_query($koneksi, $query);

    header('location: laporan.php?pesan=Data sukses disimpan');

?>
