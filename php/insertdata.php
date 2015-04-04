<?php

	    include "connect.php";
	    //Kirimkan Variabel
	    $kode_apotek    = $_POST['inputKodeApotek'];
	    $nama_apotek    = $_POST['inputNamaApotek'];
	    $produk_obat    = $_POST['inputProduk'];
	    $alamat         = $_POST['inputAlamat'];
	    $kontak         = $_POST['inputKontak'];
	    //validasi id apotek dalam database
	    $cek=mysql_num_rows (mysql_query("SELECT kode_apotek FROM data_apotek WHERE kode_apotek='$_POST[inputKodeApotek]'"));
	    if ($cek > 0) {
	    ?>
	        <script language="JavaScript">
	            alert('Kode Apotek sudah dipakai !, silahkan ulang kembali');
	            document.location='addapotek.php';
	        </script>
		<?php
	    }
	    //input data ke table data_apotek dalam database dbsiap
	    $input    ="INSERT INTO data_apotek (kode_apotek, nama_apotek, produk_obat, alamat, kontak)
	            VALUES ('$kode_apotek','$nama_apotek','$produk_obat','$alamat','$kontak')";
	    $query_input =mysql_query($input);
	        if ($query_input) {
	    //Jika Sukses
	    ?>
	        <script language="JavaScript">
	            alert('Data Apotek Berhasil diinput!');
	            document.location='addapotek.php';
	        </script>
	    <?php
	    }
	    else {
	    //Jika Gagal
	    echo "Data Apotek Gagal diinput, Silahkan diulangi!";
	    }
	    //Tutup koneksi engine MySQL
	    mysql_close($Open);
	?>