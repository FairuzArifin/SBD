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
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">


    <!-- site title -->
    <title>Enftomark</title>
</head>
<?php
    include '../includes/function.php';
    
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
        $box = wallet($_SESSION['user_id']);
        
        foreach ($box AS $wallet)        
    //end coba
?>

    <!-- if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){  
?> -->
<body class="light-version">
    <!-- preloader start here -->
   
    <!-- preloader ending here -->

    <!-- ===============// header section start here \\================= -->
    <header class="header light-version">
        <div class="container-fluid">
            <div class="header__content">
                <div class="header__logo">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-3.png" alt="logo">
                    </a>
                </div>

                <form method="get" action="search.php" class="header__search">
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
                                <span data-blast="bgColor"><i class="icofont-user"></i></span> <span
                                    class="d-none d-md-inline"><?php echo $_SESSION['name'];?></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="author.html"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Profile</a></li>
                                <li><a class="dropdown-item" href="activity.html"><span class="me-1"><i
                                                class="icofont-lightning-ray"></i></span>
                                        Activity</a></li>
                                <li><a class="dropdown-item" href="signup.html"><span class="me-1"><i
                                                class="icofont-space-shuttle"></i></span>
                                        Sign
                                        Up</a></li>
                                <li><a class="dropdown-item" href="signin.html"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="#"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="wallet-btn">
                        <a href="../../sbd/wallet/wallet.php"><span><i class="icofont-wallet" data-blast="color"></i></span> <span
                                class="d-none d-md-inline"><?php echo $wallet['fund_eth'];?></span> </a>
                    </div>
                    <?php } ?>
                </div>

                <button class="menu-trigger header__btn" id="menu05">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!-- ===============//header section end here \\================= -->