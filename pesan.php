<HTML>

    <head>
      <title>Order page</title>
      <link rel="stylesheet" href="pesan.css">
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script text="text/javascript" src="pesan.js"></script>
    </head>
    
    <body>
    
      <form class="whatsapp-form">
        <div class="datainput">
          <input class="validate" id="wa_name" name="name" required="" type="text" value='' />
          <label>Id Barang</label>
        </div>

        <div class="datainput">
          <input class="validate" id="order_amount" name="amount" required="" type="number" value='' />
          <label>jumlah Pesanan</label>         
        </div>

        <div class="datainput">
          <input class="validate" id="wa_email" name="email" required="" type="email" value='' />
          <label>Your Email Address</label>
        </div>


        <div class="datainput">
          <input class="validate" id="wa_number" name="count" required="" value='' />
          <label>No Telp/Wa</label>
        </div>

        <div class="datainput">
          <textarea id='wa_textarea' placeholder='' maxlength='5000' row='1' required=""></textarea>
          <label>Deskripsi</label>
        </div>

        <a class="send_form" href="javascript:void" type="submit" title="Send to Whatsapp">Send to Whatsapp</a>
        <div id="text-info"></div>
      </form>

    </body>
    
    </HTML>
