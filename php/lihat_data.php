<html>
<head>
<?php
include 'connect.php'; // hubungkan file php dengan file configurasi ke database
?>
</head>
<body>
<h1>Data Apotek</h1>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Apotek</th>
			<th>Nama Apotek</th>
			<th>Produk Obat</th>
			<th>Alamat</th>
			<th>Kontak</th>
			<th>opsi</th>
		</tr>		
		<?php
			$query=mysql_query("select * from data_apotek");	//mengambil data tabel data_apotik dan memasukkan nya ke variabel query
			$no=1;										//membuat nomor pada tabel
			while($lihat=mysql_fetch_array($query)){		//mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
			?>		
		<tr>
			<td><?php echo $no++; ?></td>					<!--menampilkan nomor dari variabel no-->
			<td><?php echo $lihat['kode_apotek'] ?></td>		<!--menampilkan data nim dari tabel mahasiswa-->
			<td><?php echo $lihat['nama_apotek'] ?></td>			<!--menampilkan data nama dari tabel mahasiswa-->
			<td><?php echo $lihat['produk_obat'] ?></td>			<!--menampilkan data jurusan dari tabel mahasiswa-->
			<td><?php echo $lihat['alamat'] ?></td>			<!--menampilkan data alamat dari tabel mahasiswa-->
			<td><?php echo $lihat['kontak'] ?></td>					<!--menampilkan data jenis kelamin dari tabel mahasiswa-->
			<td><a href="edit_data.php?id_mhs=<?php echo $lihat['id_apotek'] ?>">Edit</a> ||		<!--membuat link ke file dan hapus.php-->
			 <a href="hapus_data.php?id_mhs=<?php echo $lihat['id_apotek'] ?>">Hapus</a></td>    <!--membuat link ke file dan hapus.php-->
		</tr>
		<?php
			}
		?>
	</table>
	<br/>
	<a href="addapotek.php"> Add Apotek </a>	  <!--membuat link untuk di hubungakan ke file tambah mahasiswa-->
</body>
</html>