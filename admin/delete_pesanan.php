<?php 

require_once 'dbkoneksi.php';
//Simpan Data iddel
$delete = $_GET['iddel'];
//Bikin Query SQL
$sql = "DELETE FROM pesanan WHERE id=?";
//Siapin Query
$st = $dbh->prepare($sql);
//Eksekusi
$st->execute([$delete]);

header('location:datapesanan.php');

?>