<?php 

require_once 'dbkoneksi.php';
//Simpan Data iddel
$delete = $_GET['iddel'];
//Bikin Query SQL
$sql = "DELETE FROM produk WHERE id=?";
//Siapin Query
$st = $dbh->prepare($sql);
//Eksekusi
$st->execute([$delete]);

header('location:dataproduk.php');

?>