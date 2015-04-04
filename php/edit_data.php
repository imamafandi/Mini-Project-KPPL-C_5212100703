<h1>Edit Data Apotek</h1>
<?php
include 'connect.php';
$kode_apotek = $_GET['kode_apotek'];
$query = mysql_query("select * from data_apotek where kode_apotek=$kode_apotek");
while ($q = mysql_fetch_array($query)) {
    ?>
    <center><h2> Menambahkkan Apotek </h2></center><br>
        <div class="span3"> </div>
		<form class="form-horizontal" action="update.php" method="POST">
		  <div class="span4">
		  <div class="control-group">
			<label class="control-label" for="inputKodeApotek">Kode Apotek </label>
			<div class="controls">
			  <input type="text" name="inputKodeApotek" placeholder="Kode Apotek">
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="inputNamaApotek">Nama Apotek </label>
			<div class="controls">
			  <input type="text" name="inputNamaApotek" placeholder="Nama Apotek">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="inputProduk">Produk Obat</label>
			<div class="controls">
				<textarea rows="2" name="inputProduk"></textarea>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="inputAlamat">Alamat</label>
			<div class="controls">
				<textarea rows="2" name="inputAlamat"></textarea>
			</div>
		  </div>
		  

		  <div class="control-group">
			<label class="control-label" for="inputKontak">Kontak</label>
			<div class="controls">
				<input type="text" name="inputKontak" placeholder="+6289779093686">
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label" for="inputFoto">Unggah Foto</label>
			<div class="controls">
				
				
						
							<p style="color: #003bb3"><i class="icon-ok"></i> Ukuran max 300 kB <br>
							<i class="icon-ok"></i> Tipe file : jpg. jpeg, png</p>
					<form class="form-search" action="update_photo.php" method="post" enctype="multipart/form-data">
						<center>
							<input type="file" name="file" id="file"><br>
							
						</center>
					</form>
				
				
				
			</div>
		  </div>
    <?php
}
?>