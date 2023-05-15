<?php
require_once 'dbkoneksi.php';

if(isset($_POST['proses'])) {
    $_tanggal = $_POST['tanggal'];
    $_nama_pemesan = $_POST['nama_pemesan'];
    $_alamat_pemesan = $_POST['alamat_pemesan'];
    $_no_hp = $_POST['no_hp'];
    $_email = $_POST['email'];
    $_jumlah_pesanan = $_POST['jumlah_pesanan'];
    $_deskripsi = $_POST['deskripsi'];
    $_produk_id = $_POST['produk_id'];
    $_proses = $_POST['proses'];

    // array data
    $ar_data[] = $_tanggal; // 0
    $ar_data[] = $_nama_pemesan; // 1
    $ar_data[] = $_alamat_pemesan; // 2
    $ar_data[] = $_no_hp; // 3
    $ar_data[] = $_email; // 4
    $ar_data[] = $_jumlah_pesanan; // 5
    $ar_data[] = $_deskripsi; // 6
    $ar_data[] = $_produk_id; // 7

    if ($_proses == "create") {
        // data baru
        $sql = "INSERT INTO pesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    } else if ($_proses == "update") {
        $idedit = $_GET['idedit'];
        $ar_data[] = $idedit; // 8
        $sql = "UPDATE pesanan SET tanggal = ?, nama_pemesan = ?, alamat_pemesan = ?, no_hp = ?, email = ?, jumlah_pesanan = ?, deskripsi = ?, produk_id = ? WHERE id = ?";
    }

    try {
        $st = $dbh->prepare($sql);
        $st->execute($ar_data);

        header('location:datapesanan.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Proses tidak didefinisikan";
}


// header('location:datapesanan.php');
?>
