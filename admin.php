<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="dasboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="admin"><i class="fa-solid fa-house"></i><h1>Admin</h1></div>
        <ul>
            <li><a href="Admin.php"><i class="fa-solid fa-gauge"></i>&nbsp;<span class="teks">Dashboard</span></a></li>
            <li><a href="barang.php"><i class="fa-solid fa-box"></i>&nbsp;&nbsp;<span class="teks">Stok Barang</span></a></li>
            <li><a href="Supplier.php"><i class="fa-solid fa-users"></i></i>&nbsp;<span class="teks">Daftar Suplier</span></a></li>
            <li><a href="Laporan.php"><i class="fa-solid fa-clipboard-list"></i>&nbsp;<span class="teks">Laporan</span></a></li>
            <li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;<span class="teks">LogOut</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Pencarian...">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></i></button>
                </div>
                <div class="user">
                    <a href="" class="btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="" class="btn"><i class="fa-solid fa-bell"></i></a>
                    <a href="" class="btn"><i class="fa-solid fa-user"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="isi">
                    <h1>10</h1>
                    <h3>Stok Barang</h3>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-gauge"></i>
                </div>
            </div>
            <div class="card">
                <div class="isi">
                    <h1>2</h1>
                    <h3>Daftar Suplier</h3>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-truck"></i>
                </div>
            </div>
            <div class="card">
                <div class="isi">
                    <h1>10</h1>
                    <h3>Laporan</h3>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
            </div>
        </div>          
    </div>
</body>
</html>