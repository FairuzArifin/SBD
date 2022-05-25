<?php 

include  'includes/function.php';

var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">

    <meta name="author" content="codexcoder">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta tags for Social Media(Better SEO) -->
    <!-- <meta property="og:title" content=""> -->
    <!-- <meta property="og:type" content=""> -->
    <!-- <meta property="og:url" content=""> -->
    <!-- <meta property="og:image" content=""> -->

    <!-- site favicon -->
    <link rel="icon" type="image/png" href="Source Code/assets/images/favicon.png">

    <!-- ====== All css file ========= -->
    <link rel="stylesheet" href="Source Code/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Source Code/assets/css//icofont.min.css">
    <!-- <link rel="stylesheet" href="Source Code/assets/css/blast.min.css"> -->
    <link rel="stylesheet" href="Source Code/assets/css/lightcase.css">
    <link rel="stylesheet" href="Source Code/assets/css/animate.css">
    <link rel="stylesheet" href="Source Code/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="Source Code/assets/css/style.min.css">

    <!-- site title -->
    <title>OpenSea</title>
</head>

<body class="light-version">
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ===============// header section start here \\================= -->
    <!-- <header class="header light-version">
        <div class="container-fluid">
            <div class="header__content">
                <div class="header__logo">
                    <a href="index.html">
                        <img src="Source Code/assets/images/logo/logo-3.png" alt="logo">
                    </a>
                </div>

                <form action="#" class="header__search">
                    <input type="text" placeholder="Search items, collections, and creators">
                    <button type="button"><i class="icofont-search-2"></i></button>
                    <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
                        </svg></button>
                </form>
                <div class="header__menu ms-auto">
                    <ul class="header__nav mb-0">
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="index.html">Home</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Explore</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="explore.html">Explore NFT's</a></li>
                                <li><a class="drop-down-item" href="auction.html">Auction Page</a></li>

                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a href="activity.html" class="header__nav-link">Activity</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Pages</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="item-details.html">NFT Details</a></li>
                                <li><a class="drop-down-item" href="all-authors-2.html">All Authors</a></li>
                                <li><a class="drop-down-item" href="author.html">Author Profile</a></li>
                                <li><a class="drop-down-item" href="wallet.html">Wallet Connect</a></li>
                                <li><a class="drop-down-item" href="404.html">404</a></li>
                                <li><a class="drop-down-item" href="forgot-pass.html">Forgot Password</a></li>

                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z" />
                                </svg></a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="contact.html">Contact </a></li>
                                <li><a class="drop-down-item" href="coming-soon.html">Coming soon</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="header__actions">
                    <div class="header__action header__action--search">
                        <button class="header__action-btn" type="button"><i class="icofont-search-1"></i></button>
                    </div>

                    <div class="header__action header__action--profile">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="-100,10">
                                <?php if(isset($_SESSION['login'])) : ?>
                                  <span data-blast="bgColor"><i class="icofont-user"></i></span> <span
                                    class="d-none d-md-inline"><?=$_SESSION['nama']?></span>
                                <?php else : ?>
                                  <span data-blast="bgColor"><i class="icofont-user"></i></span> <span
                                    class="d-none d-md-inline">Login Here</span>
                                <?php endif ;?>
                            </a>

                            <ul class="dropdown-menu">

                                <?php if(isset($_SESSION['login'])) : ?>
                                  <li><a class="dropdown-item" href="author.php"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Profile</a></li>
                                <?php endif ;?>

                                <?php if(isset($_SESSION['login'])) : ?>
                                  <li><a class="dropdown-item" href="activity.php"><span class="me-1"><i
                                                class="icofont-lightning-ray"></i></span>
                                        Activity</a></li>
                                <?php endif ;?>
                                
                                <?php if(!isset($_SESSION['login'])) : ?>
                                  <li><a class="dropdown-item" href="signup.php"><span class="me-1"><i
                                                class="icofont-space-shuttle"></i></span>
                                        Sign
                                        Up</a></li>
                                <li><a class="dropdown-item" href="signin.php"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <?php endif ;?>

                                <?php if(isset($_SESSION['login'])) : ?>
                                  <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="logout.php"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a></li>
                                <?php endif ;?>
                                
                               
                            </ul>
                        </div>
                    </div>
                    <div class="wallet-btn">
                        <a href="wallet.html"><span><i class="icofont-wallet" data-blast="color"></i></span> <span
                                class="d-none d-md-inline">234.98ETH</span> </a>
                    </div>

                </div>

                <button class="menu-trigger header__btn" id="menu05">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header> -->
    <?php include 'includes/header.php' ?>
    <!-- ===============//header section end here \\================= -->


    <!-- ===============//banner section start here \\================= -->
    <section class="banner-section light-version" style="background-image: url(assets/images/banner/bg-4.png);">
        <div class="container">
            <div class="banner-wrapper">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1><span class="theme-color" data-blast="color">Discover</span> Collect <br>
                                And Sell <span class="theme-color" data-blast="color">NFT</span> Assets</h1>
                            <p>Digital Marketplace For Crypto Collectibles And Non-Fungible Tokens.
                                Buy, Sell, And Discover Exclusive Digital Assets.</p>
                            <div class="banner-btns d-flex flex-wrap">
                                <a data-blast="bgColor" href="explore.html"
                                    class="default-btn move-top"><span>Explore</span> </a>
                                <a href="signin.html" class="default-btn move-right"><span>Create</span> </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="nft-slider-wrapper">
                            <div class="banner-item-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="nft-item light-version">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div
                                                    class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy" src="Source Code/assets/images/seller/04.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">rasselmrh</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="Source Code/assets/images/banner/01.gif"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                        <li>
                                                                                            <span class="days">34</span><span class="count-txt">D</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <span class="hours">09</span><span class="count-txt">H</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                        </li>
                                                                                        <li>
                                                                                            <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                        </li>
                                                                                    </ul> -->
                                                    </div>
                                                    <div class="nft-content">
                                                        <h4><a href="item-details.html">Black Cat </a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nft-item light-version">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div
                                                    class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy" src="Source Code/assets/images/seller/04.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">Gucci Lucas</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="Source Code/assets/images/banner/01.png"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                            <li>
                                                                                                                                <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                            </li>
                                                                                                                        </ul> -->
                                                    </div>
                                                    <div class="nft-content">
                                                        <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nft-item light-version">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div
                                                    class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy" src="Source Code/assets/images/seller/04.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">lcus x3</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="Source Code/assets/images/banner/02.gif"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                            <li>
                                                                                                                                <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                            </li>
                                                                                                                        </ul> -->
                                                    </div>
                                                    <div class="nft-content">
                                                        <h4><a href="item-details.html">Silly C4T de</a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="nft-item light-version">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div
                                                    class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="author.html" class="veryfied"><img
                                                                        loading="lazy" src="Source Code/assets/images/seller/03.png"
                                                                        alt="author-img"></a>
                                                                <h6><a href="author.html">Imo35 ucas</a></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="more-part">
                                                        <div class=" dropstart">
                                                            <a class=" dropdown-toggle" href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                                data-bs-offset="25,0">
                                                                <i class="icofont-flikr"></i>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#"><span>
                                                                            <i class="icofont-warning"></i>
                                                                        </span> Report </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#"><span><i
                                                                                class="icofont-reply"></i></span>
                                                                        Share</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="Source Code/assets/images/banner/04.jpg"
                                                            alt="nft-img">

                                                        <!-- nft countdwon -->
                                                        <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                                                                                            <li>
                                                                                                                                <span class="days">34</span><span class="count-txt">D</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="hours">09</span><span class="count-txt">H</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="minutes">32</span><span class="count-txt">M</span>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <span class="seconds">32</span><span class="count-txt">S</span>
                                                                                                                            </li>
                                                                                                                        </ul> -->
                                                    </div>
                                                    <div class="nft-content">
                                                        <h4><a href="item-details.html">Future Rocket</a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                            <p class="nft-price">Price: <span class="yellow-color">0.34
                                                                    ETH</span>
                                                            </p>
                                                            <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                                230</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//banner section end here \\================= -->


    <!-- ===============//Category section start here \\================= -->
    <section class="category-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header style-3">
                <div class="header-shape"><span></span></div>
                <h3>Browse By Catergory</h3>
            </div>
            <div class="section-wrapper">

                <div class="category-wrapper">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/01.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/02.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/03.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="explore.html">Digital Art</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/04.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/05.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/06.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="explore.html">Music</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/07.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/08.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/09.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="explore.html">Domain Name </a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/10.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/11.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/12.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="explore.html">Sports </a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/13.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/14.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/15.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="explore.html">Utilities</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                        <div class="thumb-list swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/16.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/17.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-thumb"><img
                                                        src="Source Code/assets/images/nft-item/category/18.jpg" alt="cat-image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="explore.html">All NFT's</a> </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//Category section end here \\================= -->



    <!-- ===============//auction section start here \\================= -->
    <section class="auction-section padding-bottom">
        <div class="container">
            <div class="section-header style-3">
                <div class="header-shape"><span></span></div>
                <h3>Live Auctions</h3>
            </div>
            <div class="section-wrapper">
                <div class="auction-holder">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img src="Source Code/assets/images/seller/01.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="Source Code/assets/images/seller/01.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Jhon Doe</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="Source Code/assets/images/nft-item/04.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Walking On
                                                    Air</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img src="Source Code/assets/images/seller/01.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img src="Source Code/assets/images/seller/02.gif"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="Source Code/assets/images/seller/02.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci L.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class="dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="Source Code/assets/images/nft-item/03.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="Source Code/assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Rassel mrh</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="Source Code/assets/images/nft-item/04.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Futuristic cols</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    130</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img src="Source Code/assets/images/seller/04.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img src="Source Code/assets/images/seller/05.png"
                                                            alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img
                                                            src="Source Code/assets/images/seller/04.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Blexa z</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img src="Source Code/assets/images/nft-item/05.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01"
                                                data-blast="bgColor">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Space Crafts</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//auction section end here \\================= -->



    <!-- ===============//Top Seller section start here \\================= -->
    <section class="topseller-section padding-bottom">
        <div class="container">
            <div class="section-header style-3">
                <div class="header-shape"><span></span></div>
                <h3>Top Sellers</h3>
            </div>
            <div class="section-wrapper">
                <div class="nft-sell-wrapper">
                    <div class="row justify-content-center gx-4 gy-3">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img src="Source Code/assets/images/nft-item/style-2/01.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img
                                                    src="Source Code/assets/images/seller/04.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">01</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">Gihan Fernindo</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/02.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/02.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">02</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">liao 5er</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/03.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/03.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">03</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">xox3 nindo</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/04.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/05.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">04</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">raxel mrh</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/05.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/02.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">05</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">lsr 33xr </a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/06.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/07.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">06</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">Gihan Fernindo</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/07.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/05.png" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">07</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">xihan f3rd</a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version style-2">
                                <div class="nft-inner">
                                    <div class="nft-thumb">
                                        <img loading="lazy" src="Source Code/assets/images/nft-item/style-2/08.jpg" alt="nft-img">
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-thumb">
                                            <a href="author.html" class="veryfied"><img loading="lazy"
                                                    src="Source Code/assets/images/seller/04.gif" alt="author-img"></a>
                                        </div>
                                        <div class="author-details d-flex flex-wrap align-items-center gap-15">
                                            <div class="author-number">
                                                <h3 class="fs-36">08</h3>
                                            </div>
                                            <div class="author-det-info">
                                                <h5><a href="author.html">Leo F3s </a> </h5>
                                                <p class="nft-price yellow-color">$23,002.98</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============//Top Seller section end here \\================= -->


    <!-- ===============//Exclusive drops section start here \\================= -->
    <section class="ex-drop-section padding-bottom">
        <div class="container">
            <div class="section-header style-3">
                <div class="header-shape"><span></span></div>
                <h3>Exclusive NFT Drops</h3>
            </div>
            <div class="section-wrapper">
                <div class="ex-drop-wrapper">
                    <div class="row justify-content-center gx-4 gy-3">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci Lucas</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/01.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/01.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/02.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Ecalo jers</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/02.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Mewao com de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    278</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/02.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/05.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Hola moc</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/03.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">pet mice rio</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    340</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Logicto pen</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/06.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Logical Impact </a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    330</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/07.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/09.png" alt="author-img"></a>
                                                    <h6><a href="author.html">unique lo</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/09.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Fly on high</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    355</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Monica bel</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/06.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">kiara rodri de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    60</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/08.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/11.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci L.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/04.gif" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">EUPHORIA de</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item light-version">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/07.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="Source Code/assets/images/seller/09.png" alt="author-img"></a>
                                                    <h6><a href="author.html">ptrax elm.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="Source Code/assets/images/nft-item/08.jpg" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <!-- <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul> -->
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item-details.html">Homies wall</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.34 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    930</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- ===============//Exclusive drops section end here \\================= -->


    <!-- ===============//footer section start here \\================= -->
    <!-- <footer class="footer-section light-version">
        <div class="footer-top" style="background-image: url(assets/images/footer/bg-light.jpg);">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row g-4 align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="newsletter-part">
                                <div class="ft-header">
                                    <h4>Get The Latest Rarible Updates</h4>
                                </div>
                                <form action="#">
                                    <input type="email" placeholder="Your Mail Address">
                                    <button type="submit" data-blast="bgColor"> Subscribe now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="social-part ps-lg-5">
                                <div class="ft-header">
                                    <h4>Join the Community</h4>
                                </div>
                                <ul class="social-list d-flex flex-wrap align-items-center mb-0">
                                    <li class="social-link"><a href="#" data-blast="bgColor"><i
                                                class="icofont-twitter"></i></a></li>
                                    <li class="social-link"><a href="#" data-blast="bgColor"><i
                                                class="icofont-twitch"></i></a></li>
                                    <li class="social-link"><a href="#" data-blast="bgColor"><i
                                                class="icofont-reddit"></i></a></li>
                                    <li class="social-link"><a href="#" data-blast="bgColor"><i
                                                class="icofont-instagram"></i></a></li>
                                    <li class="social-link"><a href="#" data-blast="bgColor"><i
                                                class="icofont-dribble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="footer-links padding-top padding-bottom">
                <div class="container">
                    <div class="row g-5 row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5">
                        <div class="col">
                            <div class="footer-link-item">
                                <h5>About</h5>
                                <ul class="footer-link-list">
                                    <li><a href="#" class="footer-link">Explore</a></li>
                                    <li><a href="#" class="footer-link">How it works</a></li>
                                    <li><a href="#" class="footer-link">Support</a></li>
                                    <li><a href="#" class="footer-link">Become a partner</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-link-item">
                                <h5>NFT Marketplace</h5>
                                <ul class="footer-link-list">
                                    <li><a href="#" class="footer-link">Sell your assets</a></li>
                                    <li><a href="#" class="footer-link">FAQ</a></li>
                                    <li><a href="#" class="footer-link">Support</a></li>
                                    <li><a href="#" class="footer-link">Privacy/Policy</a></li>
                                    <li><a href="#" class="footer-link">Your purchases</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-link-item">
                                <h5>Company</h5>
                                <ul class="footer-link-list">
                                    <li><a href="#" class="footer-link">About</a></li>
                                    <li><a href="#" class="footer-link">Mission & Team</a></li>
                                    <li><a href="#" class="footer-link">Our Blog</a></li>
                                    <li><a href="#" class="footer-link">Services</a></li>
                                    <li><a href="#" class="footer-link">We're Hiring</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-link-item">
                                <h5>NFT Marketplace</h5>
                                <ul class="footer-link-list">
                                    <li><a href="#" class="footer-link">Sell your assets</a></li>
                                    <li><a href="#" class="footer-link">FAQ</a></li>
                                    <li><a href="#" class="footer-link">Support</a></li>
                                    <li><a href="#" class="footer-link">Privacy/Policy</a></li>
                                    <li><a href="#" class="footer-link">Your purchases</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer-link-item">
                                <h5>Comunity</h5>
                                <ul class="footer-link-list">
                                    <li><a href="#" class="footer-link">NFT Token</a></li>
                                    <li><a href="#" class="footer-link">Discusion</a></li>
                                    <li><a href="#" class="footer-link">Voting</a></li>
                                    <li><a href="#" class="footer-link">Suggest Feature</a></li>
                                    <li><a href="#" class="footer-link">Language</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="text-center py-4 mb-0 black-color">All rights reserved &copy; Enftomark || Design By: <a
                        class="theme-color" href="https://themeforest.net/user/codexcoder">Kelompok 9 SBD</a>
                </p>
            </div>
        </div>
    </footer> -->

    <?php include 'includes/footer.php' ?>
    <!-- ===============//footer section end here \\================= -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop light-version"><i class="icofont-stylish-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="Source Code/assets/js/jquery-3.6.0.min.js"></script>
    <script src="Source Code/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Source Code/assets/js/waypoints.min.js"></script>
    <script src="Source Code/assets/js/lightcase.js"></script>
    <script src="Source Code/assets/js/swiper-bundle.min.js"></script>
    <script src="Source Code/assets/js/countdown.min.js"></script>
    <script src="Source Code/assets/js/jquery.counterup.min.js"></script>
    <script src="Source Code/assets/js/wow.min.js"></script>
    <script src="Source Code/assets/js/isotope.pkgd.min.js"></script>
    <script src="Source Code/assets/js/functions.js"></script>
</body>

</html>