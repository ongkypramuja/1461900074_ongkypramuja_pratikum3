<!DOCTYPE HTML>
<html>
<head>
<style>
    article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
  display: block;
}

html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

input:focus,
textarea:focus {
  outline: none;
}

label,
select,
button,
input[type="submit"],
input[type="radio"],
input[type="checkbox"] input[type="button"] {
  cursor: pointer;
}

a,
a:visited,
a:active {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

::selection {
  background: #ed327b;
  color: #fff;
}

::-moz-selection {
  background: #ed327b;
  color: #fff;
}

* {
  font-size: 100%;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
body {
  background: #292929;
}

* {
  font-family: "Helvetica Neue", Helvetica, Arial;
}

h5 {
  text-align: center;
  margin-top: 5px;
  color: rgb(255, 255, 255);
}

h5 > a,
a:visited {
  color: #fff;
  text-decoration: underline;
}

h5 > a:hover {
  text-decoration: none;
}

form {
  background: #fff;
  border-radius: 6px;
  padding: 20px;
  padding-top: 30px;
  width: 300px;
  margin: 50px auto;
  box-shadow: 15px 15px 0px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  font-size: 1.4em;
  font-weight: 700;
  color: #ccc;
  margin-bottom: 24px;
}

span {
  font-weight: 200;
}

input {
  width: 100%;
  background: #f5f5f5;
  border: 0;
  padding: 20px;
  border-radius: 6px;
  margin-bottom: 10px;
  border: 1px solid #eee;
}

.btn {
  position: relative;
  width: 100%;
  padding: 20px;
  border-radius: 6px;
  border: 0;
  background: #2EBCC9;
  font-size: 1.2em;
  color: #fff;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 3px 0px #0393A1;
}

.btn:active {
  top: 3px;
  box-shadow: 6px 6px 6px rgba(0, 0, 0, 0.1);
}

h6 {
  text-align: center;
  padding: 20px;
  padding-top: 35px;
  color: #777;
 
}




    </style>
</head>
<body>
<form>
  <h1>Selamat Datang</h1>
  <input placeholder="Masukkan Username" type="text"/>
  <input placeholder="Masukkan Password" type="password"/>
  
  <button class="btn">Masuk</button>
 <?php
  if (isset($_POST['login'])) {
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	/*
	 * query ke database
	 * $db_conn didapat dari file koneksi.php
	 ***/
	$sql = "select * from users 
		where username='$username' and password=md5('$password')";
	$rs = mysql_query($sql,$db_conn) or die (mysql_error());
	if ($row=mysql_fetch_assoc($rs)) {
		// simpan variable session
		$_SESSION['user']['login']=TRUE;
		$_SESSION['user']['username']=$username;
		$_SESSION['user']['password']=$password;
		// redirect ke index.php
		header('location: index.php');
	}
	else {
		// tampilkan error
		print '<center>Proses Login GAGAL</center>';
	}
}
?>
  <h6>Ongky Pramuja 1461900074</h6>
</form>

</body>
<footer>
  <h5>Kunjungi  <a target="_blank" href="https://www.instagram.com/ongky_pramuja/">Instagram Saya</a></h5>
</footer>
</html>
