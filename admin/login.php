<?php
	session_start(); 		//mulai session, karena kita akan menggunakan session pd file php ini
	include '../php/connect.php'; 		//hubungkan dengan connect.php untuk berhubungan dengan database
	$username=$_POST['username']; 	//tangkap data yg di input dari form login input username
	$password=$_POST['password']; 	//tangkap data yg di input dari form login input password
 
	$query=mysql_query("select * from admin where username='$username' and password='$password'");	 //melakukan pengambilan data dari database untuk di cocokkan
	$xxx=mysql_num_rows($query);	 //melakukan pencocokan
	if($xxx==TRUE){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
		$_SESSION['username']=$username;  //jika cocok, buat session dengan nama sesuai dengan username
		header("location:beranda.php");     // dan alihkan ke beranda.php
	}else{   				//jika tidak tampilkan pesan gagal login
		echo "Gagal login";
	}
 
?>