<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
body{
	margin-bottom: 0px;
	padding: 0px;
	background: url(images/bglogin.jpg);
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	height: 100vh;
}
.login-box{
	width: 320px;
	height: 480px;
	background: rgba(0,0,0,0.10);
	color: #000000;
	top: 56%;
	left: 25%;
	position: absolute;
	box-sizing: border-box;
	padding: 70px;
	transform: translate(-50%, -50%);
	border-radius: 20px;
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: 33%;
}
h2{
	margin-top: 0px;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}

.login-box p{
	margin-bottom: 0px;
	padding: 5px;
	font-weight: bold;
}
.login-box input{
	width: 100%;
	margin-bottom: 20px;

}
.login-box input[type="text"], input[type="password"]{
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline: none;
		height: 40px;
		color:#2F4F4F;
		font-size: 16px;
}
.login-box input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	color: #000000;
	font-size: 18px;
	border-radius: 20px;
	background: #2F4F4F;
}
.login-box input[type="submit"]:hover{
	cursor: pointer;
	background: #778899;
	color: #fff;
}

.login-box button{
	background: #2F4F4F;
	border: none;
	height: 35px;
	font-size: 15px;
	border-radius: 20px;
}

.login-box button:hover{
	cursor: pointer;
	background: #778899;
	color: #fff;
}

.login-box a:hover{
	color: #BC8F8F;
}
	</style>
</head>

<body>
		<div class="login-box">
				<img src="images/avatar1.jpg" class="avatar">
			<h2>Form Login</h2>
			<form method="post" name="login" action="proseslogin.php">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" required autocomplete="OFF" autofocus=""></input>
				<p>Password</p>
				<input type="Password" name="password" placeholder="Enter Password"></input>
				<input type="submit" name="login" value="Login"></input>
			</form>
			<a href="index.html"><center><button>Back To Home</button></center></a>

		</div>

</body>
</html>