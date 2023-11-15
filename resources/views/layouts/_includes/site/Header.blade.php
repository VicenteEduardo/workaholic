<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/site/css/animate.min.css">
<link rel="stylesheet" href="/site/css/bootstrap.min.css">
<link rel="stylesheet" href="/site/css/fontawsome.min.css">
<link rel="stylesheet" href="/site/css/flaticon.css">
<link rel="stylesheet" href="/site/css/meanmenu.min.css">
<link rel="stylesheet" href="/site/css/owl.carousel.min.css">
<link rel="stylesheet" href="/site/css/nice-select.min.css">
<link rel="stylesheet" href="/site/css/owl.theme.default.min.css">
<link rel="stylesheet" href="/site/css/magnific-popup.min.css">
<link rel="stylesheet" href="/site/css/jquery-ui.min.css">
<link rel="stylesheet" href="/site/css/swiper.min.css">
<link rel="stylesheet" href="/site/css/odometer.min.css">
<link rel="stylesheet" href="/site/css/style.css">
<link rel="stylesheet" href="/site/css/responsive.css">

    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<title> @yield('titulo')</title>
<link rel="icon" type="image/png" href="/site/images/fav-icon.png">
</head>

<body>
    <div id="pre-loader">
    <img class="preloader-img" src="/site/images/preloader1.gif" alt="gif" />
    </div>

    <div class="topbar" style="background-color:#6bc9d2;">
    <div class="container-fluid container-large">
    <div class="row align-items-center">
    <div class="col-lg-8 col-md-9 col-sm-12 col-12">
    <div class="topbar-left-area">
    <ul>
    <li><i class="flaticon-phone-call"></i> <a href="tel:1100380790">{{ $configuration->telefone }}</a></li>
    <li><i class="flaticon-email"></i> {{ $configuration->email }}</li>
    <li><i class="flaticon-location"></i>{{ $configuration->adress }}</li>
    </ul>
    </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-12 col-12">
    <div class="topbar-social-icons">
    <ul>
    <li><a href="{{ $configuration->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="{{ $configuration->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="{{ $configuration->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>

    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
