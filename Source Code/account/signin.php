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
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">

    <!-- ====== All css file ========= -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css//icofont.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/lightcase.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.min.css">


    <!-- site title -->
    <title>OpenSea</title>
</head>

<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    header("location:../index.php?pesan=sudah");
}   
?>

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
                    <a href="index.html">
                        <img src="../assets/images/logo/logo-3.png" alt="logo">
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
                            <a class="header__nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Explore</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="../explore.php">Explore NFT's</a></li>
                                <li><a class="drop-down-item" href="../auction.php">Auction Page</a></li>

                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a href="../activity.php" class="header__nav-link">Activity</a>
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-bs-offset="0,10">Pages</a>

                            <ul class="dropdown-menu header__nav-menu">
                                <li><a class="drop-down-item" href="../item-details.php">NFT Details</a></li>
                                <li><a class="drop-down-item" href="../all-authors-2.php">All Authors</a></li>
                                <li><a class="drop-down-item" href="../author.php">Author Profile</a></li>
                                <li><a class="drop-down-item" href="../wallet.php">Wallet Connect</a></li>
                                <li><a class="drop-down-item" href="../404.php">404</a></li>
                                <li><a class="drop-down-item" href="../forgot-pass.php">Forgot Password</a></li>

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
                                <li><a class="drop-down-item" href="../contact.php">Contact </a></li>
                                <li><a class="drop-down-item" href="../coming-soon.php">Coming soon</a></li>
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
                                <li><a class="dropdown-item" href="../author.php"><span class="me-1"><i
                                                class="icofont-options"></i></span>
                                        Profile</a></li>
                                <li><a class="dropdown-item" href="../activity.php"><span class="me-1"><i
                                                class="icofont-lightning-ray"></i></span>
                                        Activity</a></li>
                                <li><a class="dropdown-item" href="signup.php"><span class="me-1"><i
                                                class="icofont-space-shuttle"></i></span>
                                        Sign
                                        Up</a></li>
                                <li><a class="dropdown-item" href="signin.php"><span class="me-1"><i
                                                class="icofont-login"></i></span> Sign
                                        In</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li><a class="dropdown-item" href="signout.php"> Sign
                                        Out <span class="ms-1"><i class="icofont-logout"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="wallet-btn">
                        <a href="../wallet.php"><span><i class="icofont-wallet" data-blast="color"></i></span> <span
                                class="d-none d-md-inline">
                                <?php 
	                                if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
                            		    echo $_SESSION['wallet'];
	                                } else {
                                        echo "Unknown";
                                    }
                                ?>
                            </span> </a>
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
    <!-- ===============//header section end here \\================= -->



    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1 light-version">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Sign In Page </h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Sign In </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========login Section start Here========== -->
    <div class="login-section light-version padding-top padding-bottom">
        <div class=" container">
            <div class="row g-5 align-items-center flex-md-row-reverse">
                <div class="col-lg-5">
                    <div class="account-wrapper">
                        <h3 class="title">Sign In</h3>
                        <form class="account-form" method="POST" action="check_signin.php">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" name="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                                    <div class="checkgroup">
                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                    <a href="forgot-pass.html">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="d-block default-btn move-top" type="submit" value="LOGIN"><span>Signin Now</span></button>
                            </div>
                        </form>
                        <div class="account-bottom">
                            <span class="d-block cate pt-10">Don't Have any Account? <a href="signup.html"> Sign
                                    Up</a></span>
                            <span class="or"><span>or</span></span>
                            <h5 class="subtitle">Login With Social Media</h5>
                            <ul class="social-media social-color lab-ul d-flex justify-content-center">
                                <li>
                                    <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="account-img">
                        <img src="../assets/images/account/01.png" alt="shape-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Login Section ends Here========== -->



    <!-- ===============//footer section start here \\================= -->
    <footer class="footer-section light-version">
        <div class="footer-top" style="background-image: url(../assets/images/footer/bg-light.jpg);">
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
                                    <button type="submit"> Subscrib now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="social-part ps-lg-5">
                                <div class="ft-header">
                                    <h4>Join the Community</h4>
                                </div>
                                <ul class="social-list d-flex flex-wrap align-items-center mb-0">
                                    <li class="social-link"><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li class="social-link"><a href="#"><i class="icofont-twitch"></i></a></li>
                                    <li class="social-link"><a href="#"><i class="icofont-reddit"></i></a></li>
                                    <li class="social-link"><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li class="social-link"><a href="#"><i class="icofont-dribble"></i></a></li>
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
                <p class="text-center py-4 mb-0">All rights reserved &copy; Enftomark || Design By: <a
                        href="https://themeforest.net/user/codexcoder">codexcoder</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- ===============//footer section end here \\================= -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop light-version"><i class="icofont-stylish-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/lightcase.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/countdown.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/functions.js"></script>
</body>

</html>