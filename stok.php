<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem informasi Stok</title>
    <link rel="stylesheet" href="stokk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">Petshop Merdeka</div>
            <div class="menu">
                <ul>
                    <li><a href="index.php #home">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="pesan.php" class="tbl-biru" style=""><i class="fa-solid fa-cart-shopping"></i>Pesan</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="title">
            <h2>Stok PetShop Merdeka</h2>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Brand</th>
                    <th>Nama Barang</th>
                    <th>Berat(Kg)</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <?php
                include "koneksi.php";
                $halaman = 10;
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
                
                $result    =mysqli_query($koneksi, "SELECT * FROM barang");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
                
                $tampilMas    =mysqli_query($koneksi, "SELECT * FROM barang LIMIT $mulai, $halaman");
                $no    =$mulai+1;
                while($mas    =mysqli_fetch_array($tampilMas)){
            ?>
            <tr>
                <td class="data"><?=$mas['nomor']; ?></td>
                <td class="data"><?=$mas['jenis_barang']; ?></td>
                <td class="data"><?=$mas['brand']; ?></td>
                <td class="data"><?=$mas['berat']; ?></td>
                <td class="data"><?=$mas['stok']; ?></td>
                <td class="data"><?=$mas['harga']; ?></td>
            </tr>
                <?php  
                    }
                ?>
        </table>
        <br />
        <div style="font-weight:bold; margin-left: 5vh; margin-top: none; " >
            halaman
            <?php
                for ($i=1; $i<=$pages ; $i++){
            ?>
                <a href="stok.php?halaman=<?php echo $i; ?>" style="text-decoration:none; color: black;">   <u><?php echo $i; ?></u></a>
            <?php
                }
            ?>
        </div>
        </table>
    </div>
    <div id="contact">
        <div class="wrapper">
          <div class="footer">
            <div class="footer-section">
              <h3>Petshop Merdeka</h3>
              <p>Sistem informasi Stok Barang Petshop Merdeka</p>
            </div>
            <div class="footer-section">
              <h3>Contact</h3>
              <p>Email: merdeka49@gmail.com
                Telp/Wa: 085859114085</p>
            </div>
            <div class="footer-section">
              <h3>Social</h3>
              <p>Instagram: PetsopMerdeka
                Facebook: PetshopMerdeka
              </p>
            </div>
          </div>
        </div>
    </div>
</body>
</html>