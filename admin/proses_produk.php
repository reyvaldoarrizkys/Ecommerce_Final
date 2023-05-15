<?php
require_once 'dbkoneksi.php';

if (isset($_POST['proses'])) {
   $_kode = $_POST['kode'];
   $_nama = $_POST['nama'];
   $_harga_jual = $_POST['harga_jual'];
   $_harga_beli = $_POST['harga_beli'];
   $_stok = $_POST['stok'];
   $_min_stok = $_POST['min_stok'];
   $_deskripsi = $_POST['deskripsi'];
   $_kategori_produk_id = $_POST['kategori_produk_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[] = $_kode; // ? 1
   $ar_data[] = $_nama; // ? 2
   $ar_data[] = $_harga_jual; // 3
   $ar_data[] = $_harga_beli;
   $ar_data[] = $_stok;
   $ar_data[] = $_min_stok;
   $ar_data[] = $_deskripsi; // ? 7
   $ar_data[] = $_kategori_produk_id; // ? 7

   if ($_proses == "create") {
      // data baru
      $sql = "INSERT INTO produk (kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk_id) VALUES (?,?,?,?,?,?,?,?)";
   } else if ($_proses == "update") {
      $idedit = $_GET['idedit'];
      $ar_data[] = $idedit; // 8
      $sql = "UPDATE produk SET kode=?,nama=?,harga_jual=?,harga_beli=?,
      stok=?,min_stok=?,deskripsi=?,kategori_produk_id=? WHERE id=?";
   }

   try {
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);

      header('location:dataproduk.php');
   } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
   }
} else {
   echo "Proses tidak didefinisikan";
}
?>
