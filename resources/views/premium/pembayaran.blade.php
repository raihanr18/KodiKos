<!DOCTYPE html>
<html ng-app="">
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM PAY KODIKOS</title>
    <link rel="stylesheet" href="{{url('css/stylePembayaran.css')}}" type="text/css">
    <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script>
    <script src="js/javascript.js" type="text/javascript"></script>
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-content">
        <div class="logo">KodiKos</div>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Materi</a></li>
        </ul>
        <div class="navbar-right">
          <button class="profile-button"><a href="#" class="profile-icon"></a></button>
        </div>
      </div>
    </nav>


  
  <div class="container">
    <center><h1 class="kilauu">Upgrade ke Premium</h1>
	<p style="color:white; font-size: 14px; max-width: 500px; margin-bottom: 30px; margin-top: -20px;">Buka Fitur-fitur premium seperti bantuan mentor dan chat langsung dengan mentor</p></center>
	
    <form action="/ubah-premium" method="POST">
        @csrf
        <div class="dot">
            <h3 style="color:black;">Langganan Premium</h3>
	        <p style="color:black;">1 Akun Premium</p>
        </div>
	  
	  <div class="dop">
        <h3 style="color:black;">Mulai Hari Ini</h3>
	    <p style="color:black;">Sekali bayar sebesar 11.500 selama 1 bulan</p>
      </div><center>
    <p style="color:white; margin-top: 30px; margin-left: 0,9%;">Pilih Metode Pembayaran</p>
      <div style="">
        <center>
        <table  style="border-collapse: collapse; margin-top: 20px; max-width: 650px; align-content: center;">
		<style>
        
      .payment-container {
        background-color: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 400px;
        width: 80%;
      }

      label {
        display: block;
        margin-bottom: 10px;
      }

      select {
        padding: 10px;
        font-size: 16px;
        width: 100%;
        margin-bottom: 15px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 5px;
        appearance: none;
        -webkit-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px center;
      }
      img {
        max-width: 30px;
        max-height: 30px;
        vertical-align: middle;
        margin-left: 10px;
      }

    </style>
        <div class="payment-container">
          <h3>Pilih Metode Pembayaran</h3>
          <select name="metode_pembayaran">
            <option value="" selected disabled>Pilih Metode Pembayaran</option>
            <option value="bni">Bni</option>
            <option value="bri">Bri</option>
            <option value="bca">Bca</option>
            <option value="linkaja">Link Aja</option>

            <option value="gopay">GoPay <img src="img/gopay.jpg" alt="GoPay Logo"></option>
          <!-- Tambahkan opsi pembayaran lain dengan logo yang sesuai -->
          </select>
        </div>
      </div>
      <button class="btn-form-pay" type="submit"><b>Lanjutkan Pembayaran</b></button>
      <a href ="/dashboard"><button class="btn-form-change" id="myBtn"><b>Batalkan Pembayaran</b></button></a>
    </form>
  </div>

  </body>
</html>
