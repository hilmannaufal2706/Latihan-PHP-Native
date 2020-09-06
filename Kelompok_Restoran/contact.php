<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Contact US!</title>
    <style type="text/css">
      body
{
  background-image: url("images/bg4.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-attachment: fixed;
}
.kotak
{
    right: 0px;
    width: 600px;
    height: 600px;
    margin-top: -400px;
    margin-left: 720px;
    margin-bottom: 15px;
    border: 5px solid #000000;
  padding: 10px;
  opacity: 0.7;
  background-color: grey;
  color: white;

}
.kotak h2, h6
{
  text-align: center;
}
.kontak
{
  height: 250px;
  width: 250px;
  margin-top: 210px;
  margin-left: 430px;
  background-color: #1F45FC;
  border: 0px solid #000000;
  opacity: 0.8;
}
.lokasi
{
  margin-top: 20px;
  padding-top: 5px;
  padding-left: 5px;
  height: 210px;
  width: 200px;
}
.gabung
{
  margin-top: 30px;
  padding-top: 5px;
  padding-left: 5px;
  height: 210px;
  width: 200px;
  border: 3px solid black;
  background-color: #2e8b57;
  color: white;
}
.gabung h5
{
  text-align: left;
}
.profile
{
  margin-top: -450px;
  margin-left: 225px;
  margin-bottom: 300px;
  padding-top: 5px;
  padding-left: 5px;
  height: 490px;
  width:  340px;
  border: 3px solid black;
  background-color: white;
  color: black;
}
.kontak h5
{
  color: white;
  text-align: center;
}
.kontak-satu
{

  height: 30px;
  width: 250px;
  border-top: 3px solid white;
  opacity: 0.8;
}
.kontak-dua
{
  padding-top: 5px;
  padding-left: 5px;
  height: 50px;
  width: 250px;
  margin-top: 20px;
  border-bottom: 3px dotted white;
  background-color: white;
  color: white;
}
.kontak-dua h5
{
  padding-left: 5px; 
  color: black;
}
.kontak-tiga
{
  padding-top: 5px;
  padding-left: 5px;
  height: 50px;
  width: 250px;
  margin-top: 15px;
  border-bottom: 3px dotted white;
  background-color: white;
  color: white;
}
.kontak-tiga h5
{
  padding-left: 5px; 
  color: black;
}
.kontak-empat
{
  padding-top: 5px;
  padding-left: 5px;
  height: 50px;
  width: 250px;
  margin-top: 15px;
  border-bottom: 3px dotted white;
  background-color: white;
  color: white;
}
.kontak-empat h5
{
  padding-left: 5px; 
  color: black;
}
.template_footer
{
  background-color: #000000;
  height: 60px;
  width: auto;
  margin-top: 220px;
  opacity: 0.6;

}
#templet_container{
  width: 100%;
  margin: 0 auto;
  padding: 0 10px;
  background: #1c1c1b url(images/templet_bg.jpg) repeat-y;

}

#templet_menu {
  clear: both;
  width: auto ;
  height: 45px;
  background: url(images/templet_menu.jpg) no-repeat;
}

#templet_menu ul {
  padding: 13px 0 0 0;
  margin: 0;
  list-style: none;
}

#templet_menu ul li{
  display: inline;
}

#templet_menu ul li a{
  float: right;
  padding: 0 20px;
  font-size: 12px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #969547;
}

#templet_menu li a:hover, #templet_menu li .current{
  color: #fcf88e;
}
    </style>

  </head>
  <body>
    <div id="templet_container">
      <div id="templet_menu">
      <ul>
            <li><a href="login.php">Log In</a></li>
            <li><a href="favorite.php">Favorite</a></li> 
            <li><a href="contact.php" class="current">Contact Us</a></li>
            <li><a href="index.html">Home</a></li>
      </ul>
     </div>
    </div>
    <div class="kontak">
      <h5>Also Find US At:</h5>
      <div class="kontak-satu">
        <div class="kontak-dua">
          <table>
            <td><img src="images/iglogo.png" width="40px" height="40px"></td>
            <td><h5><b>@Maunaloa.food</b></h5></td>
          </table>
        </div>
        <div class="kontak-tiga">
          <table>
            <td><img src="images/yt.png" width="45px" height="45px"></td>
            <td><h5><b>Maunaloa Food</b></h5></td>
          </table>
        </div>
        <div class="kontak-empat">
          <table>
            <td><img src="images/phone.png" width="40px" height="40px"></td>
            <td><h5><b>+62812-345-67-890</b></h5></td>
          </table>
        </div>
      </div>
    </div>
    <div class="kotak">
      <h2>Contact US!</h2>
        <h6>We are always ready to help! :)</h6>
        <div class="lokasi">
          <img src="images/admin.png" width="200px" height="200px">
        </div>
        <div class="gabung">
          <h5>Join Us Now! For Latest Update of Culinary Place In Bogor!</h5>
          <br>
          <center><a class="btn btn-primary" href="register.php" role="button">Join Now!</a></center>
        </div>
        <div class="profile">
          <form action="proses_contact.php" method="post">
            <div class="form-group">
            <label><b>Your Name</b></label>
            <input type="text" class="form-control" name="nama" placeholder="Name...">
            </div>
            <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" class="form-control" name="email" placeholder="Email...">
            </div>
            <div class="form-group">
            <label><b>Phone Number</b></label>
            <input type="text" class="form-control" name="no_hp" placeholder="Phone Number...">
            </div>
            <label><b>Message</b></label><textarea name="pesan" cols="30"
            rows="5"></textarea>
            <center><button type="submit" class="btn btn-primary">Send Message</button></center>
          </form>
          </div>
        </div>
        <div class="template_footer">
          <center>
          <a href="index.html">Home</a> | <a href="contact.php">Contact</a> | <a href="favorite.php">Favorite</a><br />
        Copyright © 2020 <a href="#"><strong>NAON WEH</strong></a>
        </center>
        </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>