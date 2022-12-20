<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem informasi Stok</title>
    <link rel="stylesheet" href="login.css">
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
                    <li><a href="login.php" class="tbl-biru">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
      <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>LOGIN</h2>
            <div class="underline-title"></div>
          </div>
          <form method="post" action="ceklogin.php" class="form" role="form">
            <label for="user-email" style="padding-top:13px">
                &nbsp;Email
              </label>
            <input class="form-content" type="username" name="username" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password
              </label>
            <input class="form-content" type="password" name="pasword" required />
            <div class="form-border"></div>
            <input id="submit-btn" type="submit" value="login" />
          </form>
        </div>
      </div>
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