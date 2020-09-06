<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <style type="text/css">
      /* berlaku ke semua versi termasuk mobile*/
/* navbar */
.navbar-brand{
  font-family: Viga;
  font-size: 32px;
  }
.tombol{
  text-transform: uppercase;
  border-radius: 40px;
}
.jumbotron{
  background-image: url(images/bg_3.jpg);
  background-size: cover;
  height: 340px;
}
.jumbotron .display-4{
  color: white;
  text-align: center;
  margin-top: 120px;
  font-weight: 200;
  font-size: 40px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
}
.jumbotron .display-4 span{
  font-weight: 500;
}
/* workingspace*/
.workingspace{
  margin-top: 10px;
  color: black;
}
.workingspace h4{
  font-size: 25px;
  font-weight: 200;
  text-transform: uppercase;
  margin-top: 60px;
}
.workingspace h4 span{
  font-weight: 400;
}
.workingspace p{
  font-size: 11px;
  color: #949494;
  font-weight: 200;
}
.workingspace img{
  margin-top: 60px;
  margin-bottom: 30px;
  margin-left: 90px;
  left: 70%;
  width: 70%;
}
#templet_footer {
  clear: both;
  width: 100%;
  padding: 20px 0px 20px 0;
  text-align: center;
  border-top: 1px solid #25211e;
  color: #999;
  background-color: #111110;
}
#templet_footer a{
  color: #fff;
  font-weight: normal;
}

h2{
  text-transform: uppercase;
  text-align: center;
  color: black;
}
.container hr{
  width: 500px;
  border-top:3px solid #999;
}
h3{
  color: red;
}
/* Desktop version  */
@media (min-width: 992px) { 
  .navbar-brand, .nav-link{
  color: white !important;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
  }
  .nav-link{
  text-transform: uppercase;
  margin-right: 30px;
  }
  .nav-link:hover::after{
  content: '';
  display: block;
  border-bottom: 3px solid #0B63DC;
  width: 50%;
  margin: auto;
  padding-bottom: 5px;
  margin-bottom: -8px;
  }
  .jumbotron{
  margin-top: -75px;
  height: 540px;
  }
  .workingspace{
  text-align: left;
  }
  .jumbotron .display-4{
  font-size: 62px;
  }
  .workingspace h4{
  font-size: 35px;
  font-weight: 200;
  text-transform: uppercase;
  margin-top: 60px;
  }
  .workingspace h4 span{
  font-weight: 500;
  }
  .workingspace p{
  font-size: 13px;
  color: #ACACAC;
  font-weight: 200;
  }
  .workingspace img{
  margin-top: 60px;
  margin-bottom: 30px;
  margin-left: 150px;
  left: 60%;
  width: 60%;
  }
}
    </style>

    <title>Halaman Admin</title>
    <script>
      function printContent(el){ /*el di sini sebagai perwakilan dari id-id di bawah */
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print(); /fungsi untuk mencetak/
        document.body.innerHTML = restorepage;
        setTimeout(function() {
                location.reload();
           }, 1000);
        }
    </script>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container"> 
          <a class="navbar-brand" href="#">WEEKLY</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link " href="index.html">Home </a>
              <a class="nav-item nav-link active" href="favorite.php">Favorite<span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="contact.php">Contact Us</a>
              <a class="nav-item nav-link btn btn-primary tombol" href="login.php">Log In</a>
            </div>
          </div>
        </div>
      </nav>

      <!-- Akhir Navbar -->

      <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Present Restaurant Favorite<br><span>Every Week</span></h1>
        </div>
      </div>
        <!-- Akhir Jumbotron -->

<!-- Bagian AWal Shabuhachi -->
      <div class="container">
        <div class="row workingspace">
          <div class="col-6">
            <img src="images/b-0.jpg" alt="Workingspace" class="img-fluid">
          </div>
          <div class="col-5">
            <h4><span>RESTAURANT</span> Shabu<br> Hachi</h4>
            <p>Jl. Raya Pajajaran No.75, RT.01/RW.11, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143<br>Rp. 200.000/orang</p>
          </div>
<!-- Bagian Akhir Shabuhachi -->


<!-- Awal The lake House -->
        <div class="col-6">
            <img src="images/b-2.jpeg" alt="Workingspace" class="img-fluid">
          </div>
          <div class="col-5">
            <h4><span>RESTAURANT</span> The Lake House</h4>
            <p>Jl. Taman Safari No.101, Cibeureum, Kec. Cisarua, Bogor, Jawa Barat 16750<br>Rp. 50.000 - Rp. 100.000/orang</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombol" data-toggle="modal" data-target="#exampleModal">
            GET VOUCHER
            </button>

<!-- Awal Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voucher The Lake House</h5>
              <!--close modal button -->
                    <button type="button" class="close" id="closemodal" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
               <!--akhir modal button -->     
                  </div>
                  <div class="modal-body" id="cetakmodal">
                    <h3>SELAMAT VOUCHER ANDA BERHASIL DI KLAIM</h3>
                    <h6>Dapat kan voucher makan dari naon weh sebesar30%. Cetak dan tunjukan ini ke kasir! Selamat Makan!</h6>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" value="kirim" name="kirim" class="btn btn-primary" onclick="printContent('cetakmodal')">Cetak</button>
                  </div>
                </div>
              </div>
            </div>
<!--Akhir Modal-->
        </div>
<!-- Akhir The Lake House -->


          <div class="col-6">
              <img src="images/b-6.jpg" alt="Workingspace" class="img-fluid">
          </div>
          <div class="col-5">
            <h4><span>RESTAURANT</span> Kluwih</h4>
            <p>Jl. Bina Marga I No.12, RT.04/RW.11, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143<br>Rp. 50.000 - Rp. 100.000/orang</p>
          </div>

          <div class="col-6">
              <img src="images/b-4.jpeg" alt="Workingspace" class="img-fluid">
          </div>
          <div class="col-5">
            <h4><span>RESTAURANT</span> Bumi Nini</h4>
            <p>Jl. Ke Cianjur Jl. Raya Puncak Gadog, Cibeureum, Kec. Cisarua, Bogor, Jawa Barat 16750<br>Rp. 200.000/2orang</p>
          </div>
        </div>
      </div>
<!-- Akhir Container -->

<!--Awal Section-->
<section id="portfolio" class="portfolio bg-light pb-4">
<div class="container">
<div class="row mb-5 pt-2">
<div class="col text-center">
  <h2>favorite food on the week</h2>
  <hr>
</div>
</div>
    <div class="row">
      <div class="col-md-4">
          <div class="card thumbnail">
        <img src="images/drink-3.jpg" class="card-img-top">
            </a>
        <div class="card-body">
          <b>Lemon Juice Signature Italiano</b>
          <p class="card-text">No signature lemon drop martini, lemonade, or lemon iced tea is complete without a splash of lemon juice. Without needing to slice or squeeze whole lemons, adding this lemon juice to your drinks and dishes is easy!<br>
            Location: Restourant Kluwih<br>
            Service: Excellent<br> 
            Price: Good (Rp.18.000)<br>
            Food: Amazing!</p>
            <h5><img src="images/recomen.jpg"> You must to try</h5>
        </div>
      </div>
    </div>

       <div class="col-md-4">
            <div class="card thumbnail">
          <img src="images/menu-1.jpg" class="card-img-top">
              </a>
          <div class="card-body">
            <b>Wagyu Steak</b>
            <p class="card-text">Daging sapi dengan jumlah marbeling yang banyak. sapi wagyu ada 4 macam semuanya berasal dari Jepang. Daging Wagyu memang mempunyai kualitas lebih dibandingkan daging sapi biasa. Harganya pun lebih mahal karena memiliki kandungan gizi tinggi, cita rasa khas, kesegaran, dan kelembutan daging yang sempurna.<br>
            Location: Restourant The Lake House<br>
            Service: Excellent<br> 
            Price: Good (Rp.74.000/porsi)<br>
            Food: Amazing!!
            </p>
            <h5><img src="images/recomen.jpg"> You must to try</h5>
          </div>
        </div>
      </div>

        <div class="col-md-4">
              <div class="card thumbnail">
            <img src="images/menu-2.jpg" class="card-img-top">
                </a>
            <div class="card-body">
              <b>King Lobster</b>
              <p class="card-text">Restoran ini juga menyajikan aneka hidangan kepiting yang ramah di dompet. Menunya terdiri dari beberapa pilihan seafood. Seperti kepiting, lobster, kerang, udang, dan cumi. Semuanya bisa dipadu dengan 5 pilihan saus, saus Padang, peri peri, black pepper, garlic butter, dan telur asin dengan level kepedasan 1, 2, dan 3. Salah satu hidangannya ada super lobster yang menghidangkan dua ekor lobster, dipatuk dengan harga Rp 150.000. Selain itu juga ada paket rame-rame yang bisa dimakan tiga sampai empat orang.<br>
              Location: Restourant The Lake House<br>
              Service: Excellent<br> 
              Price: Good (Rp.80.000/porsi)<br>
              Food: Amazing!!
              </p>
              <h5><img src="images/recomen.jpg"> You must to try</h5>
            </div>
        </div>
      </div>
</section>
<!--Akhir Section-->       


      <div id="templet_footer" class="mt-5">
         <a href="index.html">Home</a> | <a href="subpage.html">Contact</a> | <a href="subpage.html">Favorite</a><br />
        Copyright © 2020 <a href="#"><strong>NAON WEH</strong></a> 
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>