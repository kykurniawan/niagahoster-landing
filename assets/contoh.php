<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .top-banner {
            height: 44px;
            font-size: 14px;
            color: #333;
        }

        .top-banner a {
            color: #333;
        }

        .top-banner small {
            height: 10px;
        }

        .navbar-main {
            height: 88px;
        }

        .title {
            font-family: 'Montserrat', sans-serif;
            font-size: 32px;
            font-weight: 800;
            color: #4C4C4C;
        }

        .subtitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: 400;
            color: #4C4C4C;
            margin-bottom: 16px;
        }

        .btn-main {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 800;
            color: #fff;
            background-color: #00A2F3;
        }

        .btn-secondary {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 800;
            color: #4C4C4C;
            border: solid 2px #4C4C4C;
            padding-left: 28px;
            padding-right: 28px;
            background-color: #fff;
        }

        .footer-main {
            font-size: 14px;
            padding-top: 68px;
            padding-bottom: 16px;
            font-weight: 400;
            color: #aaa;
            background-color: #303030;
        }

        .footer-main strong {
            margin-bottom: 12px;
            font-weight: 800;
        }

        .footer-main ul {
            list-style-type: none;
            margin: 0 0 16px 0;
            padding: 0;
        }

        .footer-social {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            min-height: 80px;
            font-weight: 600;
            color: #4C4C4C;
            background-color: #F7F7F7;
        }

        .footer-contact {
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
            min-height: 176px;
            font-weight: 400;
            color: #fff;
            background-color: #00A2F3;
        }

        .footer-contact b {
            font-weight: 800;
        }

        .headline {
            font-family: 'Montserrat', sans-serif;
            color: #4C4C4C;
        }

        .headline .text1 {
            font-size: 32px;
            font-weight: 800;
        }

        .headline .text2 {
            font-size: 28px;
            font-weight: 400;
        }

        .headline .text3 {
            font-size: 18px;
            font-weight: 400;
        }

        .headline .text4 {
            font-size: 14px;
            font-weight: 400;
        }

        .headline .benefit {
            font-size: 16px;
            font-weight: 400;
        }

        .tech-img {
            display: flex;
            height: 195px;
            justify-content: center;
        }

        .fitur {
            font-family: 'Montserrat', sans-serif;
            color: #4C4C4C;
        }

        .fitur strong {
            font-size: 18px;
            font-weight: 800;
        }

        .fitur p {
            font-size: 12px;
            font-weight: 400;
        }

        .paket {
            color: #4C4C4C;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .paket .name {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        .paket .price1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 800;
        }

        .paket .price1 .big {
            font-size: 50px;
            line-height: 42px;
        }

        .paket .price1 .bold {
            font-weight: 800;
        }

        .paket .price2 {
            font-size: 18px;
            font-weight: 400;
            text-decoration: line-through;
        }

        .paket button {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 800;
            color: #4C4C4C;
            border: solid 2px #4C4C4C;
            padding-left: 28px;
            padding-right: 28px;
            background-color: #fff;
        }

        .paket button.best {
            color: #fff;
            border: solid 2px #fff;
            background-color: #00A2F3;
        }

        .newsletter-form button {
            position: absolute;
            right: 4px;
            top: 4px;
            bottom: 4px;
            font-size: 12px;
            background-color: #00A2F3;
        }

        /* common */
        .ribbon {
            width: 130px;
            height: 130px;
            overflow: hidden;
            position: absolute;
            z-index: 2;
        }

        .ribbon::before,
        .ribbon::after {
            position: absolute;
            z-index: -1;
            content: '';
            display: block;
            border: 5px solid #007732;
        }

        .ribbon span {
            position: absolute;
            display: block;
            width: 225px;
            padding: 15px 0;
            background-color: #00B359;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
            text-transform: uppercase;
            text-align: center;
        }

        /* top left*/
        .ribbon-top-left {
            top: -10px;
            left: -10px;
        }

        .ribbon-top-left::before,
        .ribbon-top-left::after {
            border-top-color: transparent;
            border-left-color: transparent;
        }

        .ribbon-top-left::before {
            top: 0;
            right: 0;
        }

        .ribbon-top-left::after {
            bottom: 0;
            left: 0;
        }

        .ribbon-top-left span {
            right: -30px;
            top: 18px;
            transform: rotate(-45deg);
        }
    </style>

</head>

<body>
    <div class="d-none d-md-flex container flex-row justify-content-between align-items-center top-banner">
        <div class="d-flex align-items-center">
            <img src="{{ asset('assets/images/pricetag.png') }}" width="28" height="auto" class="d-inline-block align-top mr-2" alt="">
            <small>{{$topnav['text']}}</small>
        </div>
        <div class="d-flex flex-row justify-content-end">
            @foreach ($topnav['menus'] as $i)
            <a href="#" class="mx-2"><i class="fas fa-{{$i['icon']}}"></i> {{$i['label']}}</a>
            @endforeach
        </div>
    </div>
    <nav class="navbar navbar-light bg-white navbar-expand-sm border-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" width="auto" height="64" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-2">
                <ul class="navbar-nav ml-auto">
                    @foreach ($navs as $nav)
                    <li class="nav-item active">
                        <a class="nav-link" href="#">{{$nav}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <main class="p-0">
        {{-- Headline --}}
        <div class="mb-4 border-bottom text-center">
            <div class="container d-flex flex-row align-items-center headline">
                <div class="row w-100">
                    <div class="col-md-6 d-flex flex-column py-4 text-left">
                        <h1 class="text1">{{ $headline['text1'] }}</h1>
                        <h2 class="text2">{{ $headline['text2'] }}</h2>
                        <div class="mt-4">
                            @foreach ($headline['benefit'] as $i)
                            <p class="small"><i class="fas fa-check-circle text-success"></i> {{ $i }}</p>
                            @endforeach
                        </div>
                        @if (isset($headline['button']))
                        <button class="btn btn-primary rounded-pill btn-main">{{$headline['button']}}</button>
                        @endif
                    </div>
                    <div class="d-none d-md-flex col-6 flex-row align-items-center">
                        <img src="{{ asset('assets/' . $headline['image'])}}" class="img-fluid" height="100%" />
                    </div>
                </div>
            </div>
        </div>

        {{-- Technology --}}
        <div class="mb-4 d-flex justify-content-center">
            <div class="container">
                <div class="row">
                    @foreach ($techs as $i)
                    <div class="col-4 d-flex flex-column text-center">
                        <div class="tech-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/' . $i['image'])}}" class="img-fluid" height="auto" />
                        </div>
                        <span>{{$i['name']}}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Paket --}}
        <div class="my-5 d-flex flex-column align-items-center text-center paket">
            <div class="container">
                <h1 class="title">{{$paket['title']}}</h1>
                <h3 class="subtitle">{{$paket['subtitle']}}</h3>
                <div class="row d-flex justify-content-center align-items-start">
                    @foreach ($paket['type'] as $i)
                    <div class="col-md-3 paket mb-2 p-md-0 position-relative">
                        @if ($i['is_best'])
                        <div class="ribbon ribbon-top-left"><span>Best Seller!</span></div>
                        @endif
                        <ul class="list-group rounded {{$i['is_best'] ? 'border border-primary' : ''}}">
                            <li class="list-group-item name {{$i['is_best'] ? 'bg-primary text-white' : ''}}">{{$i['name']}}</li>
                            <li class="list-group-item price {{$i['is_best'] ? 'bg-primary text-white' : ''}}">
                                <div class="price2">Rp {{number_format($i['price2'])}}</div>
                                <?php
                                $price_in_array = explode(',', number_format($i['price1']));
                                ?>
                                <div class="price1 d-flex flex-row align-items-start justify-content-center">
                                    <span class="mr-2">Rp</span>
                                    <span class="big">{{$price_in_array[0]}}</span>
                                    <span>.{{number_format($price_in_array[1])}}</span>
                                </div>
                            </li>
                            <li class="list-group-item {{$i['is_best'] ? 'bg-primary text-white' : ''}}"><strong>{{number_format($i['reg_count'])}}</strong> Pengguna terdaftar</li>
                            <li class="list-group-item">
                                {!! $i['feature'] !!}
                                <div class="my-4">
                                    <button class="btn btn-outline-secondary rounded-pill {{$i['is_best'] ? 'best' : ''}}">{{$i['button']}}</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Benefit --}}
        <div class="mb-4 d-flex flex-column text-center">
            <div class="container">
                <h3 class="subtitle">{{$benefit['title']}}</h3>
                <div class="d-none row d-md-flex justify-content-center">
                    <?php
                    $b = array_chunk($benefit['items'], 3);
                    ?>
                    @foreach ($b as $i)
                    <div class="col-4">
                        <ul class="list-group">
                            @foreach ($i as $j)
                            <li class="list-group-item">
                                <div style="position: absolute;left:8">
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                                {{ $j }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
                <ul class="d-flex d-md-none list-group">
                    @foreach ($benefit['items'] as $i)
                    <li class="list-group-item">
                        <div style="position: absolute;left:8">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        {{ $i }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Fitur --}}
        <div class="mb-4 d-flex flex-column text-center fitur">
            <div class="container">
                <h3 class="subtitle">{{$fitur['title']}}</h3>
                <div class="row d-flex">
                    @foreach ($fitur['items'] as $i)
                    <div class="col-6 col-md-4 d-flex flex-column p-5">
                        <img src="{{ asset('assets/' . $i['image'])}}" height="54" width="auto" />
                        <strong>{{$i['name']}}</strong>
                        <p>{{$i['desc']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Headline2 --}}
        <div class="mb-4 border-bottom text-center">
            <h3 class="subtitle">{{$headline2['text1']}}</h3>
            <div class="container d-flex flex-row align-items-center headline">
                <div class="row w-100">
                    <div class="col-md-6 d-flex flex-column py-4 text-left">
                        <h2 class="text3">{!! $headline2['text2'] !!}</h2>
                        <div class="mt-4 benefit">
                            @if (isset($headline2['benefit']))
                            @foreach ($headline2['benefit'] as $i)
                            <p class="small"><i class="fas fa-check-circle text-success"></i> {!! $i !!}</p>
                            @endforeach
                            @endif
                        </div>
                        @if (isset($headline2['nb']))
                        <div class="my-2 my-md-4">
                            <small>{{$headline2['nb']}}</small>
                        </div>
                        @endif
                        @if (isset($headline2['button']))
                        <div class="my-2 my-md-4">
                            <button class="btn btn-primary rounded-pill btn-main">{{$headline2['button']}}</button>
                        </div>
                        @endif
                    </div>
                    <div class="d-none d-md-flex col-6 flex-row align-items-center">
                        <img src="{{ asset('assets/' . $headline2['image'])}}" class="img-fluid" height="100%" />
                    </div>
                </div>
            </div>
        </div>

        {{-- Modul --}}
        <div class="mb-4 d-flex flex-column text-center">
            <div class="container">
                <h3 class="subtitle">{{$modules['title']}}</h3>
                <div class="row d-flex my-2 my-md-4">
                    @foreach ($modules['items'] as $i)
                    <div class="col-6 col-lg-3 d-flex flex-column text-left">
                        <span>{{$i}}</span>
                    </div>
                    @endforeach
                </div>
                <button class="btn btn-outline-secondary rounded-pill btn-secondary">Selengkapnya</button>
            </div>
        </div>

        {{-- Headline3 --}}
        <div class="mb-4 border-bottom text-center">
            <div class="container d-flex flex-row align-items-center headline">
                <div class="row w-100">
                    <div class="col-md-6 d-flex flex-column py-4 text-left">
                        <h3 class="text2">{{$headline3['text1']}}</h3>
                        <h2 class="text4">{!! $headline3['text2'] !!}</h2>
                        <div class="mt-4 benefit">
                            @if (isset($headline3['benefit']))
                            @foreach ($headline3['benefit'] as $i)
                            <p class="small"><i class="fas fa-check-circle text-success"></i> {!! $i !!}</p>
                            @endforeach
                            @endif
                        </div>
                        @if (isset($headline3['nb']))
                        <div class="my-2 my-md-4">
                            <small>{{$headline3['nb']}}</small>
                        </div>
                        @endif
                        @if (isset($headline3['button']))
                        <div class="my-2 my-md-4">
                            <button class="btn btn-primary rounded-pill btn-main">{{$headline3['button']}}</button>
                        </div>
                        @endif
                    </div>
                    <div class="d-none d-md-flex col-6 flex-row align-items-center">
                        <img src="{{ asset('assets/' . $headline3['image'])}}" class="img-fluid" height="100%" />
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="footer-social d-flex flex-row align-items-center py-2">
            <div class="container">
                <div class="row d-flex flex-row align-items-center justify-content-between">
                    <div class="col-12 col-md-6 col-sm-12">
                        <span>Bagikan jika anda menyukai halaman ini</span>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 border-white border-lg-left px-md-4 text-left">
                        <img src="{{ asset('assets/images/fb1.png') }}" height="100%" width="auto" class="mr-1">
                        <img src="{{ asset('assets/images/twt1.png') }}" height="100%" width="auto" class="mr-1">
                        <img src="{{ asset('assets/images/g1.png') }}" height="100%" width="auto" class="mr-1">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-contact d-flex flex-row align-items-center">
            <div class="container">
                <div class="row d-flex flex-row align-items-center justify-content-between">
                    <div class="col-12 col-lg-8 col-sm-12">
                        <span>Perlu <b>BANTUAN?</b> Hubungi Kami: <b>0274-5305505</b></span>
                    </div>
                    <div class="col-12 col-lg-4 col-sm-12 border-white border-lg-left px-md-4 text-left text-md-right">
                        <button class="btn btn-outline-light rounded-pill py-2 px-4 font-bold"><i class="fas fa-comments"></i> <b>Live Chat</b></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>HUBUNGI KAMI</strong>
                        <ul>
                            <li>0274-5305505</li>
                            <li>Senin - Minggu</li>
                            <li>24 Jam Nonstop</li>
                        </ul>
                        <ul>
                            <li>Jl. Selokan Mataram Monjali</li>
                            <li>Karangjati MT I/304</li>
                            <li>Sinduadi, Mlati, Sleman</li>
                            <li>Yohyakarta 55284</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>LAYANAN</strong>
                        <ul>
                            <li>Domain</li>
                            <li>Shared Hosting</li>
                            <li>Cloud VPS Hosting</li>
                            <li>Managed VPS Hosting</li>
                            <li>Web Builder</li>
                            <li>Keamanan SSL /HTTPS</li>
                            <li>Jasa Pembuatan Website</li>
                            <li>Program Affiliasi</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>SERVICE HOSTING</strong>
                        <ul>
                            <li>Hosting Mudah</li>
                            <li>Hosting Indoneisa</li>
                            <li>Hosting Singapura SG</li>
                            <li>Hosting PHP</li>
                            <li>Hosting Wordpress</li>
                            <li>Hosting Laravel</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>TUTORIAL</strong>
                        <ul>
                            <li>Knowledgebase</li>
                            <li>Blog</li>
                            <li>Cara Pembayaran</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>TENTANG KAMI</strong>
                        <ul>
                            <li>Tim Niagahoster</li>
                            <li>Karir</li>
                            <li>Events</li>
                            <li>Penawaran & Promo Spesial</li>
                            <li>Kontak Kami</li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 d-flex flex-column mb-3">
                        <strong>KENAPA PILIH NIAGAHOSTER?</strong>
                        <ul>
                            <li>Tim Niagahoster</li>
                            <li>Karir</li>
                            <li>Events</li>
                            <li>Penawaran & Promo Spesial</li>
                            <li>Kontak Kami</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3 d-flex flex-column mb-3">
                        <strong>NEWSLETTER</strong>
                        <div class="position-relative newsletter-form mb-2">
                            <input type="text" class="form-control rounded-pill p-4" placeholder="Email">
                            <button type="button" class="btn btn-primary rounded-pill">Berlangganan</button>
                        </div>
                        <small>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</small>
                    </div>
                    <div class="col-8 col-md-3 d-flex flex-row align-items-start justify-content-between mb-3">
                        <img src="{{ asset('assets/images/fb.png') }}" width="48" height="auto" alt="">
                        <img src="{{ asset('assets/images/twt.png') }}" width="48" height="auto" alt="">
                        <img src="{{ asset('assets/images/g.png') }}" width="48" height="auto" alt="">
                    </div>
                    <div class="col col-12 d-flex flex-column mb-3">
                        <strong>PEMBAYARAN</strong>
                        <div class="row mb-3">
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/bca.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/mandiri.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/bni.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/visa.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/mastercard.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/atm.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/permata.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/prima.png') }}" height="48" width="auto" alt="">
                            </div>
                            <div class="col col-lg-1 col-sm-3 col-md-4 m-1">
                                <img src="{{ asset('assets/images/alto.png') }}" height="48" width="auto" alt="">
                            </div>
                        </div>
                        <small>Aktivasi instan dengan e-Payment Hosting dan domain langsung aktif!</small>
                    </div>
                </div>
                <hr />
                <p>Copyright &copy;{{date('Y')}} Niagahoster | Hosting powered by PHP8, CloudLinux, CloudFlare, BitNinja and DC DCI-Indonesia. Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
            </div>
        </div>
    </main>
</body>

</html>