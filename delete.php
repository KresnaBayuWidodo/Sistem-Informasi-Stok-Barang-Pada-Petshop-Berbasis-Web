<?php
include "koneksi.php";

$nomor = $_GET['nomor'];

(!isset($nomor) && empty($nomor)) ? header('location: barang.php'): '';

$query = "DELETE FROM barang WHERE nomor = $nomor LIMIT 1";

$hasil_query = mysqli_query($koneksi, $query);

header('location: barang.php?pesan= Data sukses dihapus');

?>