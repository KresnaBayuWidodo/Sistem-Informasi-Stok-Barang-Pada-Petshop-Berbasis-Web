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
            <li><a href="Admin.html"><i class="fa-solid fa-gauge"></i>&nbsp;<span class="teks">Dashboard</span></a></li>
            <li><a href="barang.html"><i class="fa-solid fa-box"></i>&nbsp;&nbsp;<span class="teks">Stok Barang</span></a></li>
            <li><a href="barangMasuk.html"><i class="fa-sharp fa-solid fa-cart-arrow-down"></i>&nbsp;<span class="teks">Stok Masuk</span></a></li>
            <li><a href="barangKeluar.html"><i class="fa-solid fa-truck"></i>&nbsp;<span class="teks">Stok Keluar</span></a></li>
            <li><a href="Supplier.html"><i class="fa-solid fa-users"></i></i>&nbsp;<span class="teks">Daftar Suplier</span></a></li>
            <li><a href="Laporan.html"><i class="fa-solid fa-clipboard-list"></i>&nbsp;<span class="teks">Laporan</span></a></li>
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
                    <li>Kode Barang:<br><input type="text:" name="kbarang" id="kbarang"></li>
                    <li>Jenis Barang: <br><input type="text:" name="jbarang" id="jbarang"></li>
                    <li>Brand:<br> <input type="text:" name="brand" id="brand"></li>
                    <li>Berat:<br> <input type="text:" name="berat" id="berat"></li>
                    <li>Stok:<br> <input type="text:" name="stok" id="stok"></li>
                    <li>Harga:<br> <input type="text:" name="harga" id="harga"></li>
                    <button onclick="addHtmlTableRow();">simpan</button>
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
                    <th>Kode Barang</th>
                    <th>Jenis Barang</th>
                    <th>Brand</th>
                    <th>Berat/Ukuran</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
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
    <script>           
        var rIndex,
            table = document.getElementById("table");
        
        function checkEmptyInput()
        {
            var isEmpty = false,
                tanggal = document.getElementById("tanggal").value,
                id = document.getElementById("id").value,
                nama = document.getElementById("nama").value;
                berat = document.getElementById("berat").value;
                bmasuk = document.getElementById("bmasuk").value;
                bkeluar = document.getElementById("bkeluar").value;
                aksi = document.getElementById("aksi").value;
        
            if(tanggal === ""){
                alert("Kode Barang Connot Be Empty");
                isEmpty = true;
            }
            else if(id === ""){
                alert("Jenis Barang Connot Be Empty");
                isEmpty = true;
            }
            else if(nama === ""){
                alert("Brand Connot Be Empty");
                isEmpty = true;
            }
            else if(berat === ""){
                alert("Berat Connot Be Empty");
                isEmpty = true;
            }
            else if(bmasuk === ""){
                alert("Stok Connot Be Empty");
                isEmpty = true;
            }
            else if(bkeluar === ""){
                alert("Harga Connot Be Empty");
                isEmpty = true;
            }
            return isEmpty;
        }
        
        function addHtmlTableRow()
        {
            if(!checkEmptyInput()){
            var newRow = table.insertRow(table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                cell4 = newRow.insertCell(3),
                cell5 = newRow.insertCell(4),
                cell6 = newRow.insertCell(5),
                cell7 = newRow.insertCell(6),
                tanggal = document.getElementById("tanggal").value,
                id = document.getElementById("id").value,
                nama = document.getElementById("nama").value;
                berat = document.getElementById("berat").value;
                bmasuk = document.getElementById("bmasuk").value;
                bkeluar = document.getElementById("bkeluar").value;
                aksi = document.getElementById("aksi").value;
        
            cell1.innerHTML = tanggal;
            cell2.innerHTML = id;
            cell3.innerHTML = nama;
            cell4.innerHTML = berat;
            cell5.innerHTML = bmasuk;
            cell6.innerHTML = bkeluar;
            cell7.innerHTML = aksi;
            selectedRowToInput();
        }
        }

        function selectedRowToInput()
        {
            
            for(var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].onclick = function()
                {
                  rIndex = this.rowIndex;
                  document.getElementById("tanggal").value = this.cells[0].innerHTML;
                  document.getElementById("id").value = this.cells[1].innerHTML;
                  document.getElementById("nama").value = this.cells[2].innerHTML;
                  document.getElementById("berat").value = this.cells[3].innerHTML;
                  document.getElementById("bmasuk").value = this.cells[4].innerHTML;
                  document.getElementById("bkeluar").value = this.cells[5].innerHTML;
                  document.getElementById("aksi").value = this.cells[6].innerHTML;
                };
            }
        }
    </script>
</body>
</html>