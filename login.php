<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
	color: #EBF4F6;
}
 
.kotak_login{
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
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
	background-color: #D6EFD8;

}
 
.tombol_login{
	background: #183D3D;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
</style>
</head>
<body>
<form action="proses_login.php" method="post"><div class="kotak_login">
		<p class="tulisan_login">Silahkan Registeer</p>
 
		<form>
        <label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

            <input type="submit" class="tombol_login" value="login now">
		</form>
</form>
</body>
</html>