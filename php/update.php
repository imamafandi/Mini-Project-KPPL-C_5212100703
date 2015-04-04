<?php

include 'connect.php';

$kode_apotek    = $_POST['inputKodeApotek'];
$nama_apotek    = $_POST['inputNamaApotek'];
$produk_obat    = $_POST['inputProduk'];
$alamat         = $_POST['inputAlamat'];
$kontak         = $_POST['inputKontak'];
$update = mysql_query("update data_apotek set kode_apotek='$kode_apotek', nama_apotek='$nama_apotek', produk_obat='$produk_obat', alamat='$alamat', kontak='$kontak' where kode_apotek='$kode_apotek'");
if ($update) {
    header("location:lihat_data.php");
} else {
    echo "gagal mengupdate data";
}
?>