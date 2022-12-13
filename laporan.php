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
        <div class="stok">
            <div class="title">
                <h2>Stok Barang</h2>
            </div>
            <div class="box">
                <span>Add New +</span>
                <ul class="active">
                    <li>Hari/Tanggal:<br><input type="text:" name="tanggal" id="tanggal"></li>
                    <li>Id Barang: <br><input type="text:" name="id" id="id"></li>
                    <li>Nama Barang:<br> <input type="text:" name="nama" id="nama"></li>
                    <li>Berat:<br> <input type="text:" name="berat" id="berat"></li>
                    <li>Barang Masuk:<br> <input type="text:" name="bmasuk" id="bmasuk"></li>
                    <li>Barang Keluar:<br> <input type="text:" name="bkeluar" id="bkeluar"></li>
                    <button onclick="addHtmlTableRow();">Tambah</button>
                </ul>
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
            <table id="table" border="1">
                <thead>
                    <tr>
                        <th>Hari/Tanggal</th>
                        <th>Id Barang</th>
                        <th>Nama Barang</th>
                        <th>Berat/Ukuran</th>
                        <th>Barang Masuk</th>
                        <th>Barang Keluar</th>
                        <th>Aksi</th>
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
                    <td>
                        <button class="edit"> Edit </button>
                        <button class="save"> Save </button>
                        <button class="delete"> Delete </button>
                    </td> 
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
    <script>  
        $(document).on('click', '.edit', function() {  
          $(this).parent().siblings('td.data').each(function() {  
            var content = $(this).html();  
            $(this).html('<input value="' + content + '" />');  
          });  
          $(this).siblings('.save').show();  
          $(this).siblings('.delete').hide();  
          $(this).hide();  
        });  
        $(document).on('click', '.save', function() {  
          $('input').each(function() {  
            var content = $(this).val();  
            $(this).html(content);  
            $(this).contents().unwrap();  
          });  
          $(this).siblings('.edit').show();  
          $(this).siblings('.delete').show();  
          $(this).hide();  
        });  
        $(document).on('click', '.delete', function() {  
          $(this).parents('tr').remove();  
        });  
        $('.add').click(function() {  
          $(this).parents('table').append('<tr><td class="data"></td><td class="data"></td><td class="data"></td><td><button class="save">Save</button><button class="edit">Edit</button> <button class="delete">Delete</button></td></tr>');  
        });  
        </script>  
</body>
</html>