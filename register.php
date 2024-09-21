<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman registrasi</title>
    <style>
        body{
	font-family: sans-serif;
	background: #93B1A6;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_register{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
	color: #EBF4F6;
}
 
.kotak_register{
	width: 350px;
	background: #5C8374;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
	color: #EBF4F6;
}
 
.form_register{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
	background-color: #D6EFD8;
	color : ;

}
 
.tombol_register{
	background: #183D3D;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
    </style>

</head>
<body>
    <form action="proses_register.php" method="post">
	<div class="kotak_register">
		<p class="tulisan_register">Silahkan Registeer</p>
 
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_register" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_register" placeholder="Password ..">

			<label>Nama Lengkap</label>
			<input type="text" name="namalengkap" class="form_register" placeholder="Username atau email ..">

			<label>Alamat</label>
			<input type="text" name="alamat" class="form_register" placeholder="Username atau email ..">
 
			<input type="submit" class="tombol_register" value="register now">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
    </form>
</body>
</html>