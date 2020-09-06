<!DOCTYPE html>
<html>
<head>
	<title>Fom Daftar!</title>
	<style type="text/css">
	body{
	margin-bottom: 0px;
	padding: 0px;
	background: url(images/bgregis.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	height: 100vh;
}

.box{
	width: 580px;
	height: 530px;
	background: rgba(0,0,0,0.10);
	color: #000000;
	top: 45%;
	left: 50%;
	position: absolute;
	box-sizing: border-box;
	padding: 70px;
	transform: translate(-50%, -50%);
	border-radius: 20px;
}

h2{
	margin-top: -30px;
	padding: 0 0 5px;
	text-align: center;
	font-size: 22px;
	color: #fff;
}

.box p{
	margin-bottom: 0px;
	padding: 5px;
	font-weight: bold;


}

.box input{
	width: 100%
	margin-bottom:50px;
	padding: -10px;
}

.box input[type="text"]{
	border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 19px;
		width: 400px;
		color: #000000;
		font-size: 16px;
		margin-left: 10px;
		padding-left: 50px;

	}


.box input[type="submit"]{
	border: none;
	outline: none;
	height: 30px;
	color: #000000;
	font-size: 18px;
	background: #F0F8FF;
	margin: 10px;
	margin-left: 44%;

}
.box input[type="submit"]:hover{
	cursor: pointer;
	background: #2F4F4F;
	color: #fff;
}

.box a button{
	border: none;
	outline: none;
	height: 25px;
	color: #000000;
	font-size: 18px;
	background: #F0F8FF;
	margin: 10px;
	margin-left: 42%;
}

.box a button:hover{
	cursor: pointer;
	background: #2F4F4F;
	color: #fff;
}

</style>
</head>
<body>

		<div class="box">
			
			<h2>Form Pendaftaran</h2>
			<form method="post" action="proses_regis.php">
				<p>Nama</p>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required autocomplete="OFF" autofocus>

				<p>Nama Restoran</p>
       			 <input type="text" class="form-control" id="nama_resto" name="nama_resto" placeholder="Nama Restoran" required autocomplete="OFF" autofocus>

       			 <p>Kota</p>
       			  <input type="text" class="form-control" id="kota" name="kota" placeholder="Alamat Restoran" required autocomplete="OFF" autofocus>

       			 <p>Kecamatan</p>
       			  <input type="text" class="form-control" id="kec" name="kec" placeholder="Alamat Restoran"required autocomplete="OFF" autofocus>

       			 <p>KodePos</p>
        		  <input type="text" class="form-control" id="kode_pos" name="kode_pos"placeholder="KodePos Restoran" required autocomplete="OFF" autofocus>
				

				 <input type="submit" name="daftar" value="Daftar"></input>
			</form>
			<a href="index.html"><button class="back">Kembali</button></a>
		</div>



</body>
</html>