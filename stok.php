<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem informasi Stok</title>
    <link rel="stylesheet" href="stok.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">Petshop Merdeka</div>
            <div class="menu">
                <ul>
                    <li><a href="index.php #home">Home</a></li>
                    <li><a href="index.php #about">About</a></li> 
                    <li><a href="index.php #contact">Contact</a></li>
                    <li><a href="#" class="tbl-biru">Login</a>
                        <ul class="dropdown">
                            <li><form action="ceklogin.php" method="post" role="form">
                                <input type="text:" name="username"  placeholder="Username">
                                <input type="password" name="pasword" placeholder="Password">
                                <input type="submit" value="login">
                                </form>
                            </li>
                        </ul>
                    </li>
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
                    <th>Berat/Ukuran</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <?php
            include "koneksi.php";

            $query = "SELECT * FROM barang";

            $hasil_query = mysqli_query($koneksi, $query);

            while($data = mysqli_fetch_assoc($hasil_query)): ?>
            <tr>
                <td class="data"><?=$data['kode_barang']; ?></td>
                <td class="data"><?=$data['jenis_barang']; ?></td>
                <td class="data"><?=$data['brand']; ?></td>
                <td class="data"><?=$data['berat']; ?></td>
                <td class="data"><?=$data['stok']; ?></td>
                <td class="data"><?=$data['harga']; ?></td>
            </tr>
            <?php endwhile; ?>
            <button><a href="https://wa.me/6285815818103/?text=helo"><i class="fa-solid fa-circle-info"></i>info pemesanan</a></button>
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