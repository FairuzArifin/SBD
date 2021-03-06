<?php 
    include  'includes/function.php';
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
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- ====== All css file ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css//icofont.min.css">
    <!-- <link rel="stylesheet" href="assets/css/blast.min.css"> -->
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

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
    <header class="header light-version">
        <div class="container-fluid">
            <div class="header__content">
                <div class="header__logo">
                    <a href="index.php">
                        <img src="assets/images/logo/logo-3.png" alt="logo">
                    </a>
                </div>

                <form method="get" action="upload/search.php" class="header__search">
                    <input type="text" placeholder="Search items, collections, and creators" name="cari">
                    <button type="button" name="cari"><i class="icofont-search-2"></i></button>
                    <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z" />
                        </svg></button>
                </form>
                <div class="header__menu ms-auto">
                    <ul class="header__nav mb-0">

                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z" />
                                </svg></a>
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
                                  <span data-blast="bgColor"><i class="icofont-user"></i></span> <span
                                    class="d-none d-md-inline">
                                    <?php 
	                                if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                            		    echo $_SESSION['name'];
	                                } else {
                                        echo "Tamu";
                                    }
                                    ?>
                                    </span>
                            </a>

                            <ul class="dropdown-menu">

                                <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) : ?>
                                  <li><a class="dropdown-item" href="upload/author.php"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Profile</a></li>

                                <?php else : ?>
                                <li><a class="dropdown-item" href="account/signup.php"><span class="me-1"><i
                                                class="icofont-space-shuttle"></i></span>
                                        Sign
                                        Up</a></li>
                                <li><a class="dropdown-item" href="account/signin.php"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <?php endif ;?>

                                <?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true) : ?>
                                  <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="../account/signout.php"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a></li>
                                <?php endif ;?>
                                
                               
                            </ul>
                        </div>
                    </div>
                    <div class="wallet-btn">
                        <a href="../Wallet/halaman_wallet.php"><span><i class="icofont-wallet" data-blast="color"></i></span> <span
                                class="d-none d-md-inline">
                                <?php 
	                                if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                            		    $uid = $_SESSION['user_id'];
                                        $query = "SELECT fund_eth FROM wallet WHERE user_id = $uid";
                                        $isi = mysqli_query($connect, $query);
                                        $saldo = mysqli_fetch_assoc($isi);
                                        echo $saldo['fund_eth'];
	                                
                                    } else {
                                        echo "Unknown";
                                    }
                                ?></span> </a>
                    </div>
                </div>

                <button class="menu-trigger header__btn" id="menu05">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
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
                                <a data-blast="bgColor" href="upload/nft-list.php"
                                    class="default-btn move-top"><span>Explore</span> </a>
                                <a href="account/signin.php" class="default-btn move-right"><span>Create</span> </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="nft-slider-wrapper">
                            <div class="banner-item-slider">
                                <div class="swiper-wrapper">
                                <?php
                                $q = "SELECT * FROM nft
                                JOIN kepemilikan
                                ON kepemilikan.nft_id = nft.nft_id
                                JOIN user
                                ON user.user_id = kepemilikan.user_id
                                WHERE status_nft=0 LIMIT 4";
                                    $tampil = mysqli_query($connect,$q);
                                    if(mysqli_num_rows($tampil)>0){
                                        while($t = mysqli_fetch_array($tampil)){ ?>
                                    <div class="swiper-slide">
                                        <div class="nft-item light-version">
                                            <div class="nft-inner">
                                                <!-- nft top part -->
                                                <div
                                                    class="nft-item-top d-flex justify-content-between align-items-center">
                                                    <div class="author-part">
                                                        <ul class="author-list d-flex">
                                                            <li class="single-author d-flex align-items-center">
                                                                <a href="bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>" class="veryfied"><img
                                                                        loading="lazy" src="assets/images/seller/04.png"
                                                                        alt="bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"></a>
                                                                <h6><a href="bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"><?php echo $t['name'] ?></a></h6>
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

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- nft-bottom part -->
                                                <div class="nft-item-bottom">
                                                    <div class="nft-thumb">
                                                        <img loading="lazy" src="upload/nftimage/<?php echo $t['photo']?>"
                                                            alt="nft-img">


                                                    </div>
                                                    <div class="nft-content">
                                                        <h4><a href="bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"><?php echo $t['title'] ?></a> </h4>
                                                        <div
                                                            class="price-like d-flex justify-content-between align-items-center">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }} ?>
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
                <h3>Browse By Category</h3>
            </div>
            <div class="section-wrapper">

                <div class="category-wrapper">
                    <div class="row justify-content-center g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="nft-item light-version cat-item">
                                <div class="nft-inner">
                                    <div class="nft-cat-thumb ">
                                    <div class="thumb-list swiper-wrapper">
                                        <?php
                                            
                                            $query = "SELECT * FROM nft
                                                        WHERE category='Art' LIMIT 4";
                                            $tampil = mysqli_query($connect, $query);
                                            
                                            while($row=mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="swiper-slide">
                                                <div class="single-thumb">
                                                <img src="upload/nftimage/<?php echo $row['photo'] ?>" alt="cat-image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="upload/search2.php?category=Art">Art</a> </h4>
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
                                        <?php
                                            
                                            $query = "SELECT * FROM nft
                                                        WHERE category='Photography' LIMIT 4";
                                            $tampil = mysqli_query($connect, $query);
                                            
                                            while($row=mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="swiper-slide">
                                                <div class="single-thumb">
                                                <img src="upload/nftimage/<?php echo $row['photo'] ?>" alt="cat-image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="upload/search2.php?category=Photography">Photography</a> </h4>
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
                                        <?php
                                            
                                            $query = "SELECT * FROM nft
                                                        WHERE category='Collectibles' LIMIT 4";
                                            $tampil = mysqli_query($connect, $query);
                                            
                                            while($row=mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="swiper-slide">
                                                <div class="single-thumb">
                                                <img src="upload/nftimage/<?php echo $row['photo'] ?>" alt="cat-image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="upload/search2.php?category=Collectibles">Collectibles</a> </h4>
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
                                        <?php
                                            
                                            $query = "SELECT * FROM nft
                                                        WHERE category='Music' LIMIT 4";
                                            $tampil = mysqli_query($connect, $query);
                                            
                                            while($row=mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="swiper-slide">
                                                <div class="single-thumb">
                                                <img src="upload/nftimage/<?php echo $row['photo'] ?>" alt="cat-image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="upload/search2.php?category=Music">Music</a> </h4>
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
                                        <?php
                                            
                                            $query = "SELECT * FROM nft
                                                        WHERE category='Sports' LIMIT 4";
                                            $tampil = mysqli_query($connect, $query);
                                            
                                            while($row=mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="swiper-slide">
                                                <div class="single-thumb">
                                                <img src="upload/nftimage/<?php echo $row['photo'] ?>" alt="cat-image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="upload/search2.php?category=Sports">Sports</a> </h4>
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
                                        <?php
                                            
                                            $query = "SELECT * FROM nft
                                                        WHERE category='Trading Cards' LIMIT 4";
                                            $tampil = mysqli_query($connect, $query);
                                            
                                            while($row=mysqli_fetch_array($tampil)){
                                                ?>
                                                <div class="swiper-slide">
                                                <div class="single-thumb">
                                                <img src="upload/nftimage/<?php echo $row['photo'] ?>" alt="cat-image">
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="nft-content">
                                        <div class="author-details">
                                            <h4><a href="upload/search2.php?category=Trading+Cards">Trading Cards</a> </h4>
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
    <!-- ===============//Category section end here \\================= -->



    <!-- ===============//auction section start here \\================= -->
    
    <!-- ===============//auction section end here \\================= -->



    <!-- ===============//Top Seller section start here \\================= -->
    
    <!-- ===============//Top Seller section end here \\================= -->


    <!-- ===============//Exclusive drops section start here \\================= -->
    
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
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>