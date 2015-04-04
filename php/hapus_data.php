<?php

include 'connect.php';
$kode = $_GET['kode_apotek'];
$hps = mysql_query("delete from data_apotek where id_apotek=$id");
if ($hps) {
    header("location:lihat_member.php");
} else {
    echo "Gagal Menghapus";
}
?>