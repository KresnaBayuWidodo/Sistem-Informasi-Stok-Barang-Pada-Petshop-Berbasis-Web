<?php
include "koneksi.php";

$username = $_POST['username'];
$pasword = $_POST['pasword'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username ='" . $username . "' AND pasword ='" . $pasword . "'  ") or die (mysqli_error($koneksi));

if (mysqli_num_rows($sql) == 0) {
    echo '<script language = "javascript">
    alert("username dan pasword salah! silahkan login kembali."); document.location="stok.php";</script>';
}else{
    echo '<script language = "javascript">
    alert("Selamat Datang Admin!."); document.location="barang.php";</script>';
}
?>