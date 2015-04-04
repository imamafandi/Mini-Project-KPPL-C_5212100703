<html>
<head>
<title> Proses Register PHP MySQL </title>
</head>
<body bgcolor="#C2CFDF">
<?php

	include "connect.php";
	
$nama 		= $_POST['inputNama'];
$username	= $_POST['inputUsername'];
$email		= $_POST['inputEmail'];
$password 	= $_POST['password'];
	
$stop = 0;
$sql = "SELECT username FROM clients"; // Validasi duplikat data
	$qry = mysql_query($sql);
	while ($row = mysql_fetch_array($qry)) {
		if ($nama == $row['username']) {
			echo "<center><h3>Nama '$nama' telah digunakan oleh pengguna lain</h3></center>";
			echo "<center><h3>Silahkan kembali dan pilih nama yang lain<h3><center>";
		$stop = 1;
		break;
		}
	}
		if ($stop==0) {
		$sql = "INSERT INTO clients (nama_lengkap, username, email, password) VALUES ('$nama','$username','$email','$password')";
		$qry = mysql_query($sql) or
			die("Query salah : " . mysql_error());
				echo "<center>Akun Anda Telah Berhasil didaftarkan </center><br>";
				echo "<center><a href='../php/index.html' style='text-decoration:none'> Klik disini </a> untuk Login</center>";
		}
	
?>
</body>
</html>