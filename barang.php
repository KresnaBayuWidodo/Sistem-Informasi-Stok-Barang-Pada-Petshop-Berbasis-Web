<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="dasboard.css">
</head>
<body>
    <div class="sidebar">
        <div class="admin"><i class="fa-solid fa-house"></i><h1>Admin</h1></div>
        <ul>
            <li><a href="Admin.php"><i class="fa-solid fa-gauge"></i>&nbsp;<span class="teks">Dashboard</span></a></li>
            <li><a href="barang.php"><i class="fa-solid fa-box"></i>&nbsp;&nbsp;<span class="teks">Stok Barang</span></a></li>
            <li><a href="Laporan.php"><i class="fa-solid fa-clipboard-list"></i>&nbsp;&nbsp;<span class="teks">Laporan</span></a></li>
            <li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;<span class="teks">LogOut</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <form action="barang.php" method="get" class="search">
                    <input type="text" placeholder="Pencarian..." name="cari">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="user">
                    <a href="" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="" class="btn"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="stok">
            <div class="title">
                <h2>Stok Barang</h2>
            </div>
            <div class="box">
                <span>Add New +</span>
                <form method="post" action="add.php">
                <ul class="active">
                    <li>Kode Barang:<br> <input type="text" name="nomor" value="" required></li>
                    <li>Jenis Barang: <br><input type="text" name="jenis_barang" value="" required></li>
                    <li>Brand:<br> <input type="text" name="brand" value="" required></li>
                    <li>Berat:<br> <input type="text" name="berat" value="" required></li>
                    <li>Stok:<br> <input type="text" name="stok" value="" required></li>
                    <li>Harga:<br> <input type="text" name="harga" value="" required></li>
                    <li aria-colspan="6">
                    <button type="submit">simpan</button>
                    </li>
                </ul>
                </form>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
            <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
            <script>
                $(document).ready(function(){
                    $('span').click(function(){
                        $('ul').toggleClass('klik')
                    })
                })
            </script>
        <table id="table" border="">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Jenis Barang</th>
                    <th>Brand</th>
                    <th>Berat(kg)</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <?php
                include "koneksi.php";
                $halaman = 5;
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                
                $result    =mysqli_query($koneksi, "SELECT * FROM barang");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                
                $tampilMas    =mysqli_query($koneksi, "SELECT * FROM barang LIMIT $mulai, $halaman");
                $no    =$mulai+1;

                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $tampilMas = mysqli_query($koneksi, "select * from barang where jenis_barang like '%".$cari."%'");				
                }else{
                    $tampilMas = mysqli_query($koneksi,"select * from barang");		
                }
                $no = 1;
                while ($mas = mysqli_fetch_array($tampilMas)){
            ?>
            <tr>
                <td class="data"><?=$mas['nomor']; ?></td>
                <td class="data"><?=$mas['jenis_barang']; ?></td>
                <td class="data"><?=$mas['brand']; ?></td>
                <td class="data"><?=$mas['berat']; ?></td>
                <td class="data"><?=$mas['stok']; ?></td>
                <td class="data"><?=$mas['harga']; ?></td>
                <td><a href="edit.php?nomor=<?=$mas['nomor']; ?>" style="color: blue;"><i class="fa-solid fa-pen-to-square"></i></td>
                <td><a href="delete.php?nomor=<?=$mas['nomor']; ?>" style="color: red;"><i class="fa-solid fa-trash-can"></i></td>
            </tr>
            <?php  
                }
            ?>
        </table>
        <br />
        <div style="font-weight:bold;">
            halaman
            <?php
                for ($i=1; $i<=$pages ; $i++){
            ?>
                <a href="barang.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>