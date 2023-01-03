<HTML>
    <head>
      <title>Order page</title>
      <link rel="stylesheet" href="pesanan.css">
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script text="text/javascript" src="pesan.js"></script>
    </head>  
<body>
    <div class="container">

    <div class="card-container">
      <div class="left">
          <div class="left-container">
              <h2>Info Pemesanan</h2>
              <p>Belanja Online Kebutuhan Hewan Peliharaan HANYA disini !
              Menyediakan brand lokal dan internasional yang terus bertambah untuk PetLovers di seluruh Indonesia.
              Kami memiliki lebih dari 5.000 produk yg dapat memenuhi kebutuhan hewan peliharaan kesayangan Anda dengan menawarkan berbagai produk pilihan dari berbagai kategori, mulai dari makanan, vitamin dan obat-obatan, mainan, aksesoris, baju, kandang, dan masih banyak lagi.</p>
              <br>
              <p>Pesanan yang anda kirim akan langsung terkirirm ke no WA kami. Konfirmasi Pemesanan akan kami kirimkan ke No Wa yang anda tuliskan </p>
              <p>Thaks and Happy Shopping</p>
          </div>
      </div>
      <div class="right">
        <div class="right-container">   
          <form class="whatsapp-form">
          <h2 class="lg-view">Hubungi Kami</h2>
          <h2 class="sm-view">Hubungi Kami</h2>
              <input class="validate" id="wa_name" name="name" required="" type="text" value='' placeholder="Id Barang"/>
              <input class="validate" id="order_amount" name="amount" required="" type="number" value='' placeholder="Jumlah Pesanan"/>     
              <input class="validate" id="wa_email" name="email" required="" type="email" value='' placeholder="Email"/>
              <input class="validate" id="wa_number" name="count" required="" type="int" value='' placeholder="No Wa"/>
              <textarea id='wa_textarea' placeholder='Nama Lengkap dan Deskripsi Pesanan' maxlength='5000' row='1' required=""></textarea>
              <a class="send_form" href="javascript:void" type="submit" title="Send to Whatsapp">Kirim</a>
              <div id="text-info"></div>
          </form>
        </div>
      </div>
    </div>
  </body>
    
    </HTML>
