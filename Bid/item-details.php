<?php 

include '../includes/connect.php';
include '../includes/function.php';
$nftid = 3101;
$query = "SELECT * FROM nft
            JOIN bid
            ON nft.nft_id = bid.nft_id
            WHERE nft.nft_id = $nftid
            ";

    $h = mysqli_query($connect, $query);
        $nft = array();

    // ... tiap baris dari hasil query dikumpulkan ke $nft
        while ($row = mysqli_fetch_assoc($h)) {
        $nft[] = $row;
    }

    foreach ($nft as $output) :
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
    <link rel="icon" type="image/png" href="../Source Code/assets/images/favicon.png">

    <!-- ====== All css file ========= -->
    <link rel="stylesheet" href="../Source Code/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Source Code/assets/css//icofont.min.css">
    <link rel="stylesheet" href="../Source Code/assets/css/animate.css">
    <link rel="stylesheet" href="../Source Code/assets/css/lightcase.css">
    <link rel="stylesheet" href="../Source Code/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../Source Code/assets/css/style.min.css">


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
    <?php include '../includes/header.php'; ?>
    <!-- ===============//header section end here \\================= -->



    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1 light-version">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Item Details Page </h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Item Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Item Details Section start Here========== -->
    <div class="item-details-section light-version padding-top padding-bottom">
        <div class="container">
            <div class="item-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="item-desc-part">
                            <div class="item-desc-inner">
                                <div class="item-desc-thumb">
                                    <img src="<?php $output['photo'];?>.png" alt="item-img">
                                </div>
                                <div class="item-desc-content">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-details" type="button" role="tab"
                                                aria-controls="nav-details" aria-selected="true">Details</button>
                                            <button class="nav-link" id="nav-bids-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-bids" type="button" role="tab"
                                                aria-controls="nav-bids" aria-selected="false">Bids</button>
                                            <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-history" type="button" role="tab"
                                                aria-controls="nav-history" aria-selected="false">History</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="details-tab tab-pane fade show active" id="nav-details"
                                            role="tabpanel" aria-labelledby="nav-details-tab">

                                            <p><?php echo $output['description']?></p>
                                            <div class="author-profile d-flex flex-wrap align-items-center gap-15">
                                                <div class="author-p-thumb">
                                                    <a href="author.html"><img src="../Source Code/assets/images/seller/02.gif"
                                                            alt="author-img "></a>
                                                </div>
                                                <?php $box = user_nft($nftid); 
                                                    foreach ($box as $nft_details):?>
                                                <div class="author-p-info">
                                                    <p class="mb-0">Owner</p>
                                                    <h6><a href="author.html"></a><?php echo $nft_details['name']?> </h6>
                                                </div>
                                                <?php endforeach?>
                                            </div>
                                            <ul class="other-info-list">
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Token ID</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p><?PHP echo $output['nft_id']?></p>
                                                    </div>

                                                </li>
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Blockchain</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p>Ethereum (ETH)</p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        
                                        <div class="bids-tab tab-pane fade" id="nav-bids" role="tabpanel"
                                            aria-labelledby="nav-bids-tab">
                                            <span><i class="icofont-law-order"></i></span>

                                            <p><?php echo $bidnow['bid_ongoing']?></p>
                                        </div>
                                        <div class="history-tab tab-pane fade" id="nav-history" role="tabpanel"
                                            aria-labelledby="nav-history-tab">
                                            <ul class="item-histo-list">
                                                <?php $bids = show_bid($nftid); 
                                                    foreach ($bids as $bidnow) : ?>
                                                <li class="histo-item">
                                                    <p>Bid By <?php echo $bidnow['name']?> <?php echo $bidnow['bid_ongoing']?></pa></p>
                                                    <time><?php echo $bidnow['bid_time']?></time>
                                                </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-buy-part">
                            <div class="nft-item-title">
                            
                                <h3> <?php echo $output['title']?> </h3>
                                <div class="share-btn">
                                    <div class=" dropstart">
                                        <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false" data-bs-offset="25,0">
                                            <i class="icofont-share-alt"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><span>
                                                        <i class="icofont-twitter"></i>
                                                    </span> Twitter </a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><span><i
                                                            class="icofont-telegram"></i></span> Telegram</a></li>
                                            <li><a class="dropdown-item" href="#"><span><i
                                                            class="icofont-envelope"></i></span> Email</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details-countdown">
                                <h4>Ends In:</h4>
                                <?php
                                $date   = $output['auction_end'];
                                $date   = date('d-M-Y H:i:s', strtotime($date));
                                ?>
                                <ul class="item-countdown-list count-down" data-date="<?php echo $date?>">
                                    <li>
                                        <span class="days"></span><span class="count-txt">Days</span>
                                    </li>
                                    <li>
                                        <span class="hours"></span><span class="count-txt">Hours</span>
                                    </li>
                                    <li>
                                        <span class="minutes"></span><span class="count-txt">Mins</span>
                                    </li>
                                    <li>
                                        <span class="seconds"></span><span class="count-txt">Secs</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="item-price">
                                <h4>Start Price</h4>
                                <p><span><i class="icofont-coins"></i> <?php echo $output['start_bid_price']?>
                                    </span></p>
                            </div>
                            <div class="buying-btns d-flex flex-wrap">
                                <a href="wallet.html" class="default-btn move-right"><span>Buy Now <i class="icofont-coins"></i> (<?php echo $output['buy_now']?> ETH)</span> </a>
                                <button class="default-btn move-right" id="bid"><span>Place a Bid</span> </button>
                                <div id="bid-frm">
                                    <div class="col-md-12">
                                        <form id="manage-bid" method="POST" action="item-bid.php">
                                            <input type="hidden" name="nft_id" value="<?php echo $nft_id ?>" />
                                            <div class="form-group">
                                                <label for="" class="control-label"><h5>Bid Amount</h5></label>
                                                <input type="number" class="form-control text-right mt-2" name="bid_amount" style="width: 330px;">
                                            </div>
                                            <button type = "submit" class="default-btn move-right mt-3 me-5"><span>Submit</span> </button>
                                            <button type = "reset" class="default-btn move-right mt-3" id="cancel_bid"><span>Cancel</span> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Item Details Section ends Here========== -->



    <!-- ===============//footer section start here \\================= -->
    <?php include '../includes/footer.php'; ?>
    <!-- ===============//footer section end here \\================= -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop light-version"><i class="icofont-stylish-up"></i></a>
    <!-- scrollToTop ending here -->




    <!-- All Scripts -->
    <script src="../Source Code/assets/js/jquery-3.6.0.min.js"></script>
    <script src="../Source Code/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../Source Code/assets/js/waypoints.min.js"></script>
    <script src="../Source Code/assets/js/lightcase.js"></script>
    <script src="../Source Code/assets/js/swiper-bundle.min.js"></script>
    <script src="../Source Code/assets/js/countdown.min.js"></script>
    <script src="../Source Code/assets/js/jquery.counterup.min.js"></script>
    <script src="../Source Code/assets/js/wow.min.js"></script>
    <script src="../Source Code/assets/js/isotope.pkgd.min.js"></script>
    <script src="../Source Code/assets/js/functions.js"></script>
    <script>
        $('#manage-bid').submit(function(e){
        })
        $('#bid-frm').hide()
        $('#bid').click(function(){
            $(this).hide()
            $('#bid-frm').show()
        })
        $('#cancel_bid').click(function(){
            $('#bid').show()
            $('#bid-frm').hide()
        })
    </script>
</body>

</html>
<?php endforeach ?>