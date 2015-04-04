<html>
<head>
<?php
include '../php/connect.php'; // hubungkan file php dengan file configurasi ke database
?>
</head>
<body>
<h1>Data Member</h1>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Lengkap</th>
			<th>Username</th>
			<th>Email</th>
			<th>opsi</th>
		</tr>		
		<?php
			$query=mysql_query("select * from clients");	//mengambil data tabel clients dan memasukkan nya ke variabel query
			$no=1;										//membuat nomor pada tabel
			while($lihat=mysql_fetch_array($query)){		//mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
			?>		
		<tr>
			<td><?php echo $no++; ?></td>					<!--menampilkan nomor dari variabel no-->
			<td><?php echo $lihat['nama_lengkap'] ?></td>			<!--menampilkan data jurusan dari tabel mahasiswa-->
			<td><?php echo $lihat['username'] ?></td>			<!--menampilkan data alamat dari tabel mahasiswa-->
			<td><?php echo $lihat['email'] ?></td>					<!--menampilkan data jenis kelamin dari tabel mahasiswa-->
			<td> <a href="hapus_member.php?id_member=<?php echo $lihat['id_member'] ?>">Hapus</a></td>    <!--membuat link ke file dan hapus.php-->
		</tr>
		<?php
			}
		?>
	</table>
	<br/>
	<a href="account.php">Back</a>	  <!--membuat link untuk di hubungakan ke file tambah mahasiswa-->
</body>
</html>