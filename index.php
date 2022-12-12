<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem Informasi Stok Barang</title>
  <link rel="stylesheet" href="style.css">
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
    <div class="wrapper">
      <section id="home">
       <img src="https://media.istockphoto.com/vectors/cat-dog-petshop-design-vector-id1041831108?k=20&m=1041831108&s=170667a&w=0&h=VsHsZi6QKuHpswlFdLT9a2kJC2FYvtEzLV01U8Kw1zs=" alt="gambar hewan peliharaan"/>
       <div class="kolom">
       <p class="deskripsi">Sistem informasi stok barang pada PetShop Merdeka</p>
       <h2>Cintai Peliharaanmu Petshop Merdeka Solusinya</h2>
       <p>Sitem informasi ini bertujuan untuk memanajemen data serta menyediakan data stok pada Petshop Merdeka.
         Data Stok yang ditampilkan pada web sesuai yang ada di toko.
         Untuk Mendapat info lebih lanjut silahkan lihat pada info diatas atau langsung hubungi kami dibagian contact.</p>
       <p><a href="stok.php" class="tbl-biru">Lihat Stok</a></p>
       </div>
      </section>
      <section id="about">
        <div class="kolom">
          <p class="deskripsi">About</p>
          <h2>Info Petshop</h2>
          <p>Belanja Online Kebutuhan Hewan Peliharaan HANYA disini !
            Menyediakan brand lokal dan internasional yang terus bertambah untuk PetLovers di seluruh Indonesia.
            Kami memiliki lebih dari 5.000 produk yg dapat memenuhi kebutuhan hewan peliharaan kesayangan Anda dengan menawarkan berbagai produk pilihan dari berbagai kategori, mulai dari makanan, vitamin dan obat-obatan, mainan, aksesoris, baju, kandang, dan masih banyak lagi.</p>
        </div>
        <img src="https://img.freepik.com/free-vector/empty-pet-shop-interior-with-no-people-petshop-banner-cartoon-concept-parrot-cage-fish-aquarium-counter-domestic-animal-feed-toys-sale-business_575670-1153.jpg?w=826&t=st=1665489594~exp=1665490194~hmac=83bc3418ce99a9de7b44f1608f3f6cf2b02ebcf50d678e3d7fb19127f5dfde25" alt="gambar Petshop" height="400px" width="600px">
      </section>
      <section id="stok">
        <div class="tengah">
          <h2>Stok Barang</h2>
        </div>
        <div class="stok">
          <div class="daftarbarang">
            <img src="" alt="">
          </div>
        </div>
      </section>
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
