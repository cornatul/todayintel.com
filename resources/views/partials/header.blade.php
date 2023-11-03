<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title') - {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- header-area start -->
<header id="top-menu" class="transparent-head">
    <div id="theme_header_one" class="main-header-area pl-160 pr-160 pt-25 pb-20">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                    <div class="logo">
                        <a class="logo-img" href="index.html">
                            <img class="logo-1" src="{{ asset('img/logo/header_logo_one.svg') }}" alt="today intel">
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-6 col-6 text-right">
                    <div class="main-nav d-flex align-items-center justify-content-end justify-content-xl-between">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="#">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Services</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right-nav d-md-flex align-items-center justify-content-end">
                            <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                                <a href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                            <div class="right-btn d-none d-md-inline-block ml-25">
                                <ul class="d-flex align-items-center">
                                    <li><a href="{{ route('login') }}" class="theme_btn theme_black_btn d-none d-sm-inline-block">
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area end -->
