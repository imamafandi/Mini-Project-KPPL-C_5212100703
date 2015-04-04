<?php

include '../php/connect.php';
$id = $_GET['id_member'];
$hps = mysql_query("delete from clients where id_member=$id");
if ($hps) {
    header("location:lihat_member.php");
} else {
    echo "gagal menghapus";
}
?>