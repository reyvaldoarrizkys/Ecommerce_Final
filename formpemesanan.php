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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700;800&display=swap" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css" />

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>E-Commerce</title>

    <style>
        label[for="produk_id"] {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        label[for="isiform"] {
            align-content: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #produk_id {
            margin-bottom: 20px;
            height: 50px;
            padding: 8px 15px;
            font-size: 14px;
            border: 3px solid #1E6F5C;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        }

        #produk_id:focus {
            outline: none;
            border-color: #66afe9;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        #produk_id:hover {
            background: #1E6F5C;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container">
                <a href="index.html" class="logo">E<span>Commerce</span></a>
                <div class="menu-wrapper">
                    <div class="menuClose bx bx-x">

                    </div>
                    <div class="menu">
                        <a href="index.html" class="active nav-link">Beranda</a>
                        <a href="" class="nav-link">Pesanan</a>
                        <a href="index.html#pagetestimoni" class="nav-link">Testimoni</a>
                        <a href="index.html#pagecontact" class="nav-link">Kontak</a>
                        <a href="admin/login.php" class="nav-link">Admin</a>
                    </div>
                    <div class="icons">
                        <i class='bx bx-search icon'></i>
                        <i class='bx bx-shopping-bag icon'></i>
                        <i class='bx bx-user'></i>
                    </div>
                </div>
                <div class="menuOpen bx bx-grid-alt"></div>
            </div>
        </div>
    </header>

    <!-- HOME START -->
    <section class="home" id="home">
        <div class="container">
            <div class="content-left">
                <h1 class="heading">PEMESANAN BARANG DI ECOMMERCE</h1>
                <p class="subheading">
                    Untuk pemesanan barang silahkan mengisi form dibawah ini!
                </p>
                <div class="btn-home">
                    <a href="#pagepesan" class="btn-lihatproduk">Pesan Disini</a>
                    <a href="" class="btn-learn">Lihat Produk</a>
                </div>
            </div>
            <div class="content-right">
                <!-- Swiper -->
                <div class="swiper mySwiperHome">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="image/table.png" alt="" style="width: 350px;"></div>
                        <div class="swiper-slide"><img src="image/ac.png" alt="" style="width: 350px;"></div>
                        <div class="swiper-slide"><img src="image/kulkas.png" alt="" style="width: 350px;"></div>
                        <div class="swiper-slide"><img src="image/tv.png" alt="" style="width: 350px;"></div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true">
                        </span>
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2">
                        </span>
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3">
                        </span>
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4">
                        </span>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
        </div>
    </section>
    <!-- HOME END -->

    <!-- Contact Start -->
    <br id="pagepesan">
    <section class="contact">
        <div class="container">
            <div class="content-left">
                <p class="label">PEMESANAN BARANG</p>
                <h3 class="heading">Selamat datang di halaman pembelian barang ECommerce,
                    Disini tersedia berbagai macam barang seperti Furniture, Elektronik, Perabotan, Kecantikan, Makanan, Minuman, Dan masih banyak yang lainnya!
                    <br> Untuk pemesanan barang silahkan mengisi lengkap form yang telah disediakan!

                </h3>

                <div class="thumbnail-contact">
                    <img src="image/banner2.jpg" class="img-contact" alt="">
                </div>
            </div>
            <div class="content-right">
                <form class="form-group" method="POST" action="formprosespemesanan.php">
                    <label for="isiform">Isi Form Dibawah Ini!</label>
                    <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
                    <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="" placeholder="Nama Lengkap">
                    <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="" placeholder="Alamat Lengkap">
                    <input id="no_hp" name="no_hp" type="text" class="form-control" value="" placeholder="No Handphone">
                    <input id="email" name="email" type="email" class="form-control" value="" placeholder="Email Adress">
                    <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control" value="" placeholder="Jumlah Pesanan">
                    <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Contoh: Lebar layar 21 inch"></textarea>
                    <?php
                    $sqljenis = "SELECT * FROM produk";
                    $rsjenis = $dbh->query($sqljenis);
                    ?>
                    <label for="produk_id">Pilih Produk</label>
                    <select id="produk_id" name="produk_id" class="form-control">
                        <?php
                        foreach ($rsjenis as $rowjenis) {
                        ?>
                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <button name="proses" type="submit" class="btn-contact">Pesan Sekarang</button>


                </form>
            </div>
        </div>
    </section>

    <!-- Contact End -->



    <!-- Footer Start -->

    <footer class="footer">
        <div class="container">
            <div class="row1">
                <div class="content-left">
                    <p class="logo"><span>E</span>Commerce</p>
                    <a href="#" class="email">aldo354@gmail.com</a>
                    <p class="phone">+6281282298326</p>
                    <div class="icons">
                        <a href=""><i class='bx bxl-whatsapp'></i></a>
                        <a href=""><i class='bx bxl-facebook'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                    </div>
                </div>
                <div class="content-right">
                    <div class="col1">
                        <h3>Layanan</h3>
                        <ul>
                            <li>Produk</li>
                            <li>Pemesanan</li>
                            <li>Admin</li>
                            <li>Kontak</li>
                        </ul>
                    </div>
                    <div class="col2">
                        <h3>Informasi</h3>
                        <ul>
                            <li>Jam Kerja</li>
                            <li>Persyaratan</li>
                            <li>Tentang Kami</li>
                        </ul>
                    </div>
                    <div class="col3">
                        <h3>Link Pembantu</h3>
                        <ul>
                            <li>Layanan</li>
                            <li>Support</li>
                            <li>Syarat dan Ketentuan</li>
                            <li>Kebijakan Pribadi</li>
                        </ul>
                    </div>
                    <div class="col4">
                        <h3>Alamat</h3>
                        <p class="address">
                            Jl. Kavling IIP No.43 RT/RW 005/002 Kalimulya, Depok
                        </p>
                        <a href="" class="maps">Google Maps</a>
                    </div>
                </div>
            </div>
            <div class="row2">
                <p>&copy;Copyright 2022 All Right Reserved | Built by <a href="#">Reyvaldo Arrizky - Teknik Informatika 15</a></p>
            </div>
        </div>
    </footer>

    <!-- Footer End -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/script.js"></script>
</body>

</html>