
<?php
require_once 'dbkoneksi.php';

$_nama = $_POST['nama_kategori'];

$_proses = $_POST['proses'];
 
// array data
$ar_data[] = $_nama; // ? 1

if(isset($_POST['proses'])){
   if($_POST['proses'] == 'create'){
       $sql = "INSERT INTO kategori_produk (nama) 
                   VALUES (?)";
   }else if($_POST['proses'] == 'update'){
       $ar_data[] = (int) $_POST['id'];
       $sql = "UPDATE kategori_produk SET nama=? WHERE id=?";
   }
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
   header('location:kategoriproduk.php');
}else{
   header('location:kategoriproduk.php');
}


?>