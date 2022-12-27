<?php
include "koneksi.php";

$id_barang = $_GET['id_barang'];

(!isset($id_barang) && empty($id_barang)) ? header('location: laporan.php'): '';

$query = "DELETE FROM laporan WHERE id_barang = $id_barang LIMIT 1";

$hasil_query = mysqli_query($koneksi, $query);

header('location: laporan.php?pesan= Data sukses dihapus');

?>