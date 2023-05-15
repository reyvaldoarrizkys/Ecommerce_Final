<?php
$host = 'localhost';
$db = 'db_reyv22213ti';
$user = 'reyv22213ti';
$pass = '19670110222213';
$charset='utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES=>false,
];

$dbh =  new PDO($dsn,$user,$pass,$opt);

// mendapatkan nilai dari form
$_tanggal = $_POST["tanggal"];
$_nama_pemesan = $_POST["nama_pemesan"];
$_alamat_pemesan = $_POST["alamat_pemesan"];
$_no_hp = $_POST["no_hp"];
$_email = $_POST["email"];
$_jumlah_pesanan = $_POST["jumlah_pesanan"];
$_deskripsi = $_POST["deskripsi"];
$_produk_id = $_POST["produk_id"];

// array data
$ar_data[] = $_tanggal; // 0
$ar_data[] = $_nama_pemesan; // 1
$ar_data[] = $_alamat_pemesan; // 2
$ar_data[] = $_no_hp; // 3
$ar_data[] = $_email; // 4
$ar_data[] = $_jumlah_pesanan; // 5
$ar_data[] = $_deskripsi; // 6
$ar_data[] = $_produk_id; // 7



$sql = "INSERT INTO pesanan (tanggal, nama_pemesan, alamat_pemesan, no_hp, email, jumlah_pesanan, deskripsi, produk_id) VALUES (?,?,?,?,?,?,?,?)";
if (isset($sql)) {
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);

}

if(!$st){
    echo "masalahnya disini";
}


header('location:formberhasil.php');
