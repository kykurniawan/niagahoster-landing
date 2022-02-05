<?php
$data = json_decode(file_get_contents('./data.json'));
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Niagahoster</title>
</head>

<body>
    <div class="d-none d-md-flex container flex-row justify-content-between align-items-center top-banner border-bottom">
        <div class="d-flex align-items-center">
            <img src="./assets/images/pricetag.png" width="35" height="auto" class="d-inline-block align-top me-2" alt="">
            <small>Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</small>
        </div>
        <div class="d-flex flex-row justify-content-end menu">
            <a href="#" class="mx-2 text-decoration-none"><i class="fas fa-phone-alt"></i> 0274-5305505</a>
            <a href="#" class="mx-2 text-decoration-none"><i class="fas fa-comments"></i> Live Chat</a>
            <a href="#" class="mx-2 text-decoration-none"><i class="fas fa-user-circle"></i> Member Area</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.png" width="260">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hosting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Server</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Afiliasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section class="py-3 py-lg-5 border-bottom heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="monstserrat fw-bold headline">PHP Hosting</h1>
                    <h2 class="subheadline">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h2>
                    <div class="mt-5 list">
                        <p><i class="fas fa-check-circle text-success"></i> Solusi PHP untuk performa query yang lebih cepat.</p>
                        <p><i class="fas fa-check-circle text-success"></i> Konsumsi memori yang lebih rendah.</p>
                        <p><i class="fas fa-check-circle text-success"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.</p>
                        <p><i class="fas fa-check-circle text-success"></i> Fitur enkripsi IonCube dan Zend Guard Loaders.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid w-100 d-none d-lg-block" src="./assets/svg/illustration banner PHP hosting-01.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="row align-items-baseline justify-content-center">
                        <div class="col-lg-4 text-center">
                            <div class="d-flex justify-content-center">
                                <img class="d-block text-center img-fluid" src="./assets/images/zenguard.png" alt="">
                            </div>
                            <div>PHP Zend Guard Loader</div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="d-flex justify-content-center">
                                <img class="d-block text-center img-fluid" src="./assets/images/composer.png" alt="">
                            </div>
                            <div>PHP Composer</div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="d-flex justify-content-center">
                                <img class="d-block text-center img-fluid" src="./assets/images/ioncube.png" alt="">
                            </div>
                            <div>PHP IonCube Loader</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 paket">
        <div class="container">
            <h2 class="text-center fw-bold title">Paket Hosting Singapura yang Tepat</h2>
            <h3 class="text-center subtitle">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
            <div class="row mt-3 mt-lg-5">
                <?php foreach ($data->paket->type as $paket) : ?>
                    <div class="col-md-3 paket mb-2 p-md-0 position-relative">
                        <?php if ($paket->bestSeller) : ?>
                            <div class="paket-label paket-label-top-left"><span>Best Seller!</span></div>
                        <?php endif ?>
                        <ul class="list-group rounded <?= $paket->bestSeller ? 'border border-primary' : '' ?>">
                            <li class="text-center list-group-item name <?= $paket->bestSeller ? 'bg-primary text-white' : '' ?>"><?= $paket->name ?></li>
                            <li class="list-group-item price <?= $paket->bestSeller ? 'bg-primary text-white' : '' ?>">
                                <div class="price2 text-center mb-3">Rp <?= number_format($paket->price) ?></div>
                                <?php
                                $price_in_array = explode(',', number_format($paket->afterDiscount));
                                ?>
                                <div class="price1 d-flex flex-row align-items-start justify-content-center">
                                    <span class="me-2">Rp</span>
                                    <span class="big"><?= $price_in_array[0] ?></span>
                                    <span>.<?= number_format($price_in_array[1]) ?></span>
                                </div>
                            </li>
                            <li class="list-group-item <?= $paket->bestSeller ? 'bg-primary text-white' : '' ?>"><strong><?= number_format($paket->registrationCount) ?></strong> Pengguna terdaftar</li>
                            <li class="list-group-item text-center">
                                <?= $paket->feature ?>
                                <div class="my-4">
                                    <button class="btn btn-outline-secondary rounded-pill <?= $paket->bestSeller ? 'best' : '' ?>"><?= $paket->buttonText ?></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 benefit">
        <div class="container">
            <h3 class="text-center subtitle mb-lg-5 mb-4">Powerful dengan Limit PHP yang Lebih Besar</h3>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="row align-items-baseline justify-content-center">
                        <div class="col-lg-6 text-center">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div style="position: absolute;left:8">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    max execution time 300s
                                </li>
                                <li class="list-group-item">
                                    <div style="position: absolute;left:8">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    max execution time 300s
                                </li>
                                <li class="list-group-item">
                                    <div style="position: absolute;left:8">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    PHP memory limit 1024 MB
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-center">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div style="position: absolute;left:8">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    post max size 128 MB
                                </li>
                                <li class="list-group-item">
                                    <div style="position: absolute;left:8">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    upload max filesize 128 MB
                                </li>
                                <li class="list-group-item">
                                    <div style="position: absolute;left:8">
                                        <i class="fas fa-check-circle text-success"></i>
                                    </div>
                                    max input vars 2500
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 included">
        <div class="container">
            <h3 class="text-center subtitle mb-lg-5 mb-4">Semua Paket Hosting Sudah Termasuk</h3>
            <div class="row align-items-baseline justify-content-center">
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <img class="d-block text-center" width="80" src="./assets/svg/icon PHP Hosting_PHP Semua Versi.svg" alt="">
                    </div>
                    <h4>PHP Semua Versi</h4>
                    <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7.<br>Ubah sesuka Anda!</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <img class="d-block text-center" width="80" src="./assets/svg/icon PHP Hosting_My SQL.svg" alt="">
                    </div>
                    <h4>MySQL Versi 5.6</h4>
                    <p>Nikmati MySQL versi terbaru, tercepat dan<br>kaya akan fitur.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <img class="d-block text-center" width="80" src="./assets/svg/icon PHP Hosting_CPanel.svg" alt="">
                    </div>
                    <h4>Panel Hosting cPanel</h4>
                    <p>Kelola website dengan panel canggih yang<br>familiar di hati Anda.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <img class="d-block text-center" width="80" src="./assets/svg/icon PHP Hosting_garansi uptime.svg" alt="">
                    </div>
                    <h4>Garansi Uptime 99.9%</h4>
                    <p>Datacenter yang mendukung kelangsungan<br>website Anda 24/7.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <img class="d-block text-center" width="80" src="./assets/svg/icon PHP Hosting_InnoDB.svg" alt="">
                    </div>
                    <h4>Database InnoDB Unlimited</h4>
                    <p>Jumlah dan ukuran database yang tumbuh<br>sesuai kebutuhan Anda.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center">
                        <img class="d-block text-center" width="80" src="./assets/svg/icon PHP Hosting_My SQL remote.svg" alt="">
                    </div>
                    <h4>Wildcard Remote MySQL</h4>
                    <p>Mendukung s/d 25 max_user_connections<br>dan 100 max_connections.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 border-bottom laravel">
        <div class="container">
            <h3 class="text-center subtitle mb-lg-5 mb-4">Mendukung Penuh Framework Laravel</h3>
            <div class="row">
                <div class="col-lg-6">
                    <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan hosting PHP murah kami mendukung penuh framework favorit Anda</p>
                    <div class="mt-5 list">
                        <p><i class="fas fa-check-circle text-success"></i> Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.</p>
                        <p><i class="fas fa-check-circle text-success"></i> Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json, </strong> dan <strong>fileinfo</strong>.</p>
                        <p><i class="fas fa-check-circle text-success"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.</p>
                        <p><i class="fas fa-check-circle text-success"></i> Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall packages pilihan anda.</p>
                    </div>
                    <small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                    <div class="mt-4">
                        <a href="" class="btn btn-primary1 rounded-pill">Pilih Hosting Anda</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid w-100 d-none d-lg-block" src="./assets/svg/illustration banner support laravel hosting.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 border-bottom modul">
        <div class="container">
            <h3 class="text-center subtitle mb-lg-5 mb-4">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h3>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center text-lg-start">
                            <p class="mb-0">IcePHP</p>
                            <p class="mb-0">apc</p>
                            <p class="mb-0">apcu</p>
                            <p class="mb-0">apcm</p>
                            <p class="mb-0">ares</p>
                            <p class="mb-0">bcmath</p>
                            <p class="mb-0">bcompiler</p>
                            <p class="mb-0">big_int</p>
                            <p class="mb-0">bitset</p>
                            <p class="mb-0">bloomy</p>
                            <p class="mb-0">bz2_filter</p>
                            <p class="mb-0">clamav</p>
                            <p class="mb-0">coin_acceptor</p>
                            <p class="mb-0">crack</p>
                            <p class="mb-0">dba</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center text-lg-start">
                            <p class="mb-0">http</p>
                            <p class="mb-0">huffman</p>
                            <p class="mb-0">idn</p>
                            <p class="mb-0">igbinary</p>
                            <p class="mb-0">imagick</p>
                            <p class="mb-0">imap</p>
                            <p class="mb-0">inclued</p>
                            <p class="mb-0">inotify</p>
                            <p class="mb-0">interbase</p>
                            <p class="mb-0">intl</p>
                            <p class="mb-0">ioncube_loader</p>
                            <p class="mb-0">ioncube_loader_4</p>
                            <p class="mb-0">jsmin</p>
                            <p class="mb-0">json</p>
                            <p class="mb-0">ldap</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center text-lg-start">
                            <p class="mb-0">nd_pdo_mysql</p>
                            <p class="mb-0">oauth</p>
                            <p class="mb-0">oci8</p>
                            <p class="mb-0">odbc</p>
                            <p class="mb-0">opache</p>
                            <p class="mb-0">pdf</p>
                            <p class="mb-0">pdo</p>
                            <p class="mb-0">pdo_dblib</p>
                            <p class="mb-0">pdo_firebird</p>
                            <p class="mb-0">pdo_mysql</p>
                            <p class="mb-0">pdo_odbc</p>
                            <p class="mb-0">pdo_pgsql</p>
                            <p class="mb-0">pdo_sqlite</p>
                            <p class="mb-0">pgsql</p>
                            <p class="mb-0">phalcon</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center text-lg-start">
                            <p class="mb-0">stats</p>
                            <p class="mb-0">stem</p>
                            <p class="mb-0">stomp</p>
                            <p class="mb-0">suhosin</p>
                            <p class="mb-0">sybase_ct</p>
                            <p class="mb-0">sysvmsg</p>
                            <p class="mb-0">sysvsem</p>
                            <p class="mb-0">sysvshm</p>
                            <p class="mb-0">tidy</p>
                            <p class="mb-0">timezonedb</p>
                            <p class="mb-0">trader</p>
                            <p class="mb-0">translit</p>
                            <p class="mb-0">uploadprogres</p>
                            <p class="mb-0">url_template</p>
                            <p class="mb-0">uuid</p>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <a href="" class="btn btn-outline-secondary rounded-pill border-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-lg-5 linux">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="subtitle mb-4">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                    <p>SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan tekologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
                    <div class="mt-4">
                        <a href="" class="btn btn-primary1 rounded-pill">Pilih Hosting Anda</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid w-100 d-none d-lg-block" src="./assets/images/Image support.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-gray cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-items-center d-flex">
                    <small>Bagikan jika Anda menyukai halaman ini.</small>
                </div>
                <div class="col-lg-6">
                    <a href=""><img src="./assets/images/fb1.png" alt=""></a>
                    <a href=""><img src="./assets/images/twt1.png" alt=""></a>
                    <a href=""><img src="./assets/images/g1.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-primary1 cta2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-items-center d-flex text-light monstserrat">
                    <span>Perlu <strong>BANTUAN?</strong> Hubungi Kami : 0274-5305505</span>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <a href="" class="btn btn-outline-light rounded-pill btn-lg"><i class="fas fa-comments"></i> Live Chat</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-3 pt-lg-5 pb-lg-3 bg-footer">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <h6 class="text-secondary mb-4">HUBUNGI KAMI</h6>
                    <div class="mb-4">
                        <p class="mb-0 text-secondary">0274-5305505</p>
                        <p class="mb-0 text-secondary">Senin - Minggu</p>
                        <p class="mb-0 text-secondary">24 Jam Nonstop</p>
                    </div>
                    <div class="mb-4">
                        <p class="mb-0 text-secondary">Jl. Selokan Mataram Monjali</p>
                        <p class="mb-0 text-secondary">Karangjati MT I/304</p>
                        <p class="mb-0 text-secondary">Sinduadi, Mlati, Sleman</p>
                        <p class="mb-0 text-secondary">Yogyakarta 55284</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h6 class="text-secondary mb-4">LAYANAN</h6>
                    <div class="mb-4">
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Domain</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Shared Hosting</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Cloud VPS Hosting</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Managed VPS Hosting</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Web Builder</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Keamanan SSL / HTTPS</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Jasa Pembuatan Website</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Program Afiliasi</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h6 class="text-secondary mb-4">SERVICE HOSTING</h6>
                    <div class="mb-4">
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Hosting Murah</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Hosting Indonesia</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Hosting Singapura SG</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Hosting PHP</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Hosting Wordpress</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Hosting Laravel</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h6 class="text-secondary mb-4">TUTORIAL</h6>
                    <div class="mb-4">
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Knowledgebase</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Blog</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Cara Pembayaran</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-secondary mb-4">TENTANG KAMI</h6>
                    <div class="mb-4">
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Tim Niagahoster</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Karir</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Events</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Penawaran & Promo Spesial</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Kontak Kami</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-3">
                    <h6 class="text-secondary mb-4">KENAPA PILIH NIAGAHOSTER?</h6>
                    <div class="mb-4">
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Support Terbaik</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Garansi Harga Termurah</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Domain Gratis Selamanya</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Datacenter Hosting Terbaik</a>
                        </p>
                        <p class="mb-0">
                            <a href="" class="link-secondary text-decoration-none">Review Pelanggan</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <h6 class="text-secondary mb-4">NEWSLETTER</h6>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <form action="" method="post" id="newsletter-form">
                                    <div class="bg-white rounded-pill p-2 w-100 d-flex justify-content-between">
                                        <input placeholder="Email" type="email" name="email" id="email" class="w-100 text-secondary px-2">
                                        <button type="submit" class="btn btn-primary1 rounded-pill">Berlangganan</button>
                                    </div>
                                </form>
                                <p class="mb-0 text-secondary">
                                    Dapatkan promo dan konten menarik dri penyedia hosting terbaik Anda
                                </p>
                            </div>
                            <div class="col-lg-6 mb-3 d-flex justify-content-lg-between justify-content-center">
                                <a href=""><img width="60px" height="60px" src="./assets/images/fb.png" alt=""></a>
                                <a href=""><img width="60px" height="60px" src="./assets/images/twt.png" alt=""></a>
                                <a href=""><img width="60px" height="60px" src="./assets/images/g.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="text-secondary mb-4">PEMBAYARAN</h6>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        <a href=""><img class="me-2 mb-2" src="./assets/images/bca.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/mandiri.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/bni.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/visa.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/mastercard.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/atm.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/permata.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/prima.png" alt=""></a>
                        <a href=""><img class="me-2 mb-2" src="./assets/images/alto.png" alt=""></a>
                    </div>
                    <p class="text-secondary small">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif</p>
                </div>
            </div>
            <div class="row">
                <dov class="col-lg-9 mb-3 text-secondary small">
                    Copyright @2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja, and DC Biznet. Technovillage Jakarta
                    <br>
                    Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                </dov>
                <dov class="col-lg-3 text-end mb-3 text-secondary">
                    <a href="" class="link-secondary text-decoration-none small">Syarat dan Ketentuan</a>
                    |
                    <a href="" class="link-secondary text-decoration-none small">Kebijakan Privasi</a>
                </dov>
            </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>