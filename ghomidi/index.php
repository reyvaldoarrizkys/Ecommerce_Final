

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
</head>

<body>
    <header>
        <div class="navbar">
            <div class="container">
                <a href="" class="logo">E<span>Commerce</span></a>
                <div class="menu-wrapper">
                    <div class="menuClose bx bx-x">

                    </div>
                    <div class="menu">
                        <a href="#" class="active nav-link">Beranda</a>
                        <a href="formpemesanan.php" class="nav-link">Pesanan</a>
                        <a href="#pagetestimoni" class="nav-link">Testimoni</a>
                        <a href="#pagecontact" class="nav-link">Kontak</a>
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
                <h1 class="heading">Belanja Berbagai Produk Secara Online</h1>
                <p class="subheading">
                    E-Commerce adalah Website Toko Online dimana pelanggan dapat membeli berbagai macam produk secara
                    online
                </p>
                <div class="btn-home">
                    <a href="" class="btn-lihatproduk">Lihat Produk</a>
                    <a href="" class="btn-learn">Learn More</a>
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
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true">
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

    <!-- Produk -->
    <br id="#pageproduct">
    <section class="product">
        <div class="container">
            <div class="row1">
                <div class="title-section">
                    <p class="label">Produk Kami</p>
                    <h4 class="heading">Ini Adalah Produk Yang Disediakan oleh Toko Kami</h3>
                </div>
                <div class="btn-slider">
                    <i class='bx bxs-chevron-left-circle'></i>
                    <i class='bx bxs-chevron-right-circle'></i>
                </div>
            </div>
            <div class="row2">
                <div class="swiper mySwiperProduct">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-product">
                            <img src="image/table.png" alt="" style="width: 200px;" />
                            <div class="card-body">
                                <a href="#" class="product-name">Meja</a>
                                <div class="star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p class="stock">(6 Stock)</p>
                                <p class="price">Rp. 2.000.000,00</p>
                            </div>
                            <a href="#" class="btn-card"><i class='bx bx-shopping-bag'></i>
                            </a>
                        </div>
                        <div class="swiper-slide card-product">
                            <img src="image/ac.png" alt="" style="width: 200px;" />
                            <div class="card-body">
                                <a href="#" class="product-name">AC</a>
                                <div class="star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p class="stock">(10 Stock)</p>
                                <p class="price">Rp. 4.000.000,00</p>
                            </div>
                            <a href="#" class="btn-card"><i class='bx bx-shopping-bag'></i>
                            </a>
                        </div>
                        <div class="swiper-slide card-product">
                            <img src="image/kulkas.png" alt="" style="width: 200px;" />
                            <div class="card-body">
                                <a href="#" class="product-name">Kulkas</a>
                                <div class="star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p class="stock">(9 Stock)</p>
                                <p class="price">Rp. 3.500.000,00</p>
                            </div>
                            <a href="#" class="btn-card"><i class='bx bx-shopping-bag'></i>
                            </a>
                        </div>
                        <div class="swiper-slide card-product">
                            <img src="image/tv.png" alt="" style="width: 200px;" />
                            <div class="card-body">
                                <a href="#" class="product-name">TV</a>
                                <div class="star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p class="stock">(11 Stock)</p>
                                <p class="price">Rp. 2.500.000,00</p>
                            </div>
                            <a href="#" class="btn-card"><i class='bx bx-shopping-bag'></i>
                            </a>
                        </div>
                        <div class="swiper-slide card-product">
                            <img src="image/table.png" alt="" style="width: 200px;" />
                            <div class="card-body">
                                <a href="#" class="product-name">Meja</a>
                                <div class="star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p class="stock">(25 Stock)</p>
                                <p class="price">Rp. 150.000,00</p>
                            </div>
                            <a href="#" class="btn-card"><i class='bx bx-shopping-bag'></i>
                            </a>
                        </div>
                        <div class="swiper-slide card-product">
                            <img src="image/table.png" alt="" style="width: 200px;" />
                            <div class="card-body">
                                <a href="#" class="product-name">Meja</a>
                                <div class="star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p class="stock">(25 Stock)</p>
                                <p class="price">Rp. 150.000,00</p>
                            </div>
                            <a href="#" class="btn-card"><i class='bx bx-shopping-bag'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testi Start -->
    <br id="pagetestimoni">
    <section class="testi">
        <div class="container">
            <div class="content-left">
                <p class="label">TESTIMONI</p>
                <h3 class="heading">Apa Kata Mereka?</h3>
                <p class="subheading">
                    Kebanyakan dari mereka memberikan feedback positif untuk kami, yang tidak lain karena pelayanan
                    terbaik yang kami berikan
                </p>
            </div>
            <div class="content-right">
                <!-- Swiper -->
                <div class="swiper mySwiperTesti">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card-testi">
                            <p class="date">6/12/2023</p>
                            <div class="profile">
                                <img src="image/Paul_Circle.png" style="width: 120px;" class="card-testi-img" alt="">
                                <p class="name">Reyvaldo Arrizky</p>
                                <p class="location">Depok</p>
                            </div>
                            <div class="card-body">
                                <i class='bx bxs-quote-left'></i>
                                <p class="text-testi">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque modi sapiente ut
                                    saepe
                                    eligendi suscipit, quasi in optio commodi? Quo.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide card-testi">
                            <p class="date">6/12/2023</p>
                            <div class="profile">
                                <img src="image/Rubio_Circle.png" style="width: 120px;" class="card-testi-img" alt="">
                                <p class="name">Reyvaldo Arrizky</p>
                                <p class="location">Depok</p>
                            </div>
                            <div class="card-body">
                                <i class='bx bxs-quote-left'></i>
                                <p class="text-testi">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque modi sapiente ut
                                    saepe
                                    eligendi suscipit, quasi in optio commodi? Quo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="">

                </div>
            </div>
        </div>
    </section>
    <!-- Testi End -->

    <!-- Contact Start -->
    <br id="pagecontact">
    <section class="contact">
        <div class="container">
            <div class="content-left">
                <p class="label">CONTACT</p>
                <h3 class="heading">Apakah Ada Masalah? Hubungi Kami!</h3>
                <div class="thumbnail-contact">
                    <img src="image/cs.jpeg" class="img-contact" alt="">
                </div>
            </div>
            <div class="content-right">
                <form action="#" class="form-group">
                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email Adress">
                    <textarea name="" id="" placeholder="Type your email here" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn-contact">Send Message</button>
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
                <p>&copy;Copyright 2022 All Right Reserved | Built by <a href="#">Reyvaldo Arrizky - Teknik Informatika
                        15</a></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script/script.js"></script>
</body>

</html>