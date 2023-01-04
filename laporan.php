<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
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
                <form action="laporan.php" method="get" class="search">
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
                <h2>Laporan</h2>
            </div>
            <div class="box">
                <span>Add New +</span>
                <form method="post" action="add_laporan.php">
                <ul class="active">
                    <li>No:<br> <input type="text" name="id_barang" value="" required></li>
                    <li>Tanggal: <br><input type="date" name="Tanggal" value="" required></li>
                    <li>Nama Barang:<br> <input type="text" name="nm_barang" value="" required></li>
                    <li>Brand:<br> <input type="text" name="Merk" value="" required></li>
                    <li>Barang Masuk:<br> <input type="text" name="masuk" value="" required></li>
                    <li>Barang Keluar:<br> <input type="text" name="keluar" value="" required></li>
                    <li aria-colspan="5">
                    <button type="submit" style="background-color: green; color: white; padding: 10px; font-size: 12px; border: 0; margin-top: 20px;">simpan</button>
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
            <table id="table" border="1" class="scroll">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Brand</th>
                        <th>Barang Masuk</th>
                        <th>Barang Keluar</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <?php
                    include "koneksi.php";
                    $halaman = 5;
                    $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                    
                    $result    =mysqli_query($koneksi, "SELECT * FROM laporan");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total/$halaman);
                    
                    $tampilMas    =mysqli_query($koneksi, "SELECT * FROM laporan LIMIT $mulai, $halaman");
                    $no    =$mulai+1;
    
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        $tampilMas = mysqli_query($koneksi, "select * from laporan where nm_barang like '%".$cari."%'");				
                    }else{
                        $tampilMas = mysqli_query($koneksi,"select * from laporan");		
                    }
                    $no = 1;
                    while ($mas = mysqli_fetch_array($tampilMas)){
                ?>
                <tr>
                    <td><?=$mas['id_barang']; ?></td>
                    <td><?=$mas['Tanggal']; ?></td>
                    <td><?=$mas['nm_barang']; ?></td>
                    <td><?=$mas['Merk']; ?></td>
                    <td><?=$mas['masuk']; ?></td>
                    <td><?=$mas['keluar']; ?></td>
                    <td><a href="edit_laporan.php?id_barang=<?=$mas['id_barang']; ?>" style="color: blue;"><i class="fa-solid fa-pen-to-square"></i></td>
                    <td><a href="delete_laporan.php?id_barang=<?=$mas['id_barang']; ?>" style="color: red;"><i class="fa-solid fa-trash-can"></i></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>