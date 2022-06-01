<?php
    include "../includes/connect.php";
    include "include/header.php";
    
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
?>
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1 light-version">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Author Profile</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><?php echo $_SESSION['name'];?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->

    <!-- ==========Profile Section Start Here========== -->
    <section class="profile-section light-version padding-top padding-bottom">
        <div class="container">
            <div class="section-wrapper">
                <div class="member-profile">
                    <div class="profile-item">
                        <div class="profile-cover">
                            <img src="../assets/images/profile/cover.jpg" alt="cover-pic">
                            <div class="edit-photo custom-upload">
                                <div class="file-btn"><i class="icofont-camera"></i>
                                    Edit Photo</div>
                                <input type="file">
                            </div>
                        </div>
                        <div class="profile-information">
                            <div class="profile-pic">
                                <img src="../assets/images/profile/profil.jpg" alt="DP">
                                <div class="custom-upload">
                                    <div class="file-btn">
                                        <span class="d-none d-lg-inline-block"> <i class="icofont-camera"></i>
                                            Edit</span>
                                        <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span>
                                    </div>
                                    <input type="file">
                                </div>
                            </div>
                            <div class="profile-name">
                                <h4><?php echo $_SESSION['name'];?></h4>
                                <p><?php echo $_SESSION['email'];?></p>
                            </div>

                            
                            

                        </div>
                    </div>
                    <div class="profile-item d-none">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <a href="#"><img src="../assets/images/profile/Profile.jpg" alt="profile"></a>
                            </div>
                            <div class="lab-content">
                                <div class="profile-name">
                                    <div class="p-name-content">
                                        <h4>William Smith</h4>
                                        <p>Active 02 Minutes Ago</p>
                                    </div>

                                    <div class="contact-button">
                                        <button class="contact-btn">
                                            <i class="icofont-info-circle"></i>
                                        </button>
                                    </div>
                                </div>
                                <ul class="profile-contact">
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-user"></i></div>
                                            <div class="text">
                                                <p>Add Friends</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-envelope"></i></div>
                                            <div class="text">
                                                <p>Publice Message</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="icon"><i class="icofont-envelope"></i></div>
                                            <div class="text">
                                                <p>Private Message</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="profile-details">
                        <nav class="profile-nav">
                            
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <!-- All NFT tab -->
                            <div class="tab-pane activity-page fade show active" id="allNft" role="tabpanel">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <article>
                                                <div class="activity-tab">
                                                    <ul class="nav nav-pills mb-30 px-2" id="pills-tab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-personal-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-personal"
                                                                type="button" role="tab" aria-controls="pills-personal"
                                                                aria-selected="false">
                                                                <i class="icofont-flask"></i>
                                                                Create NFT</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-mentions-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-mentions"
                                                                type="button" role="tab" aria-controls="pills-mentions"
                                                                aria-selected="true"><i class="icofont-flash"></i>
                                                                On Sale</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-favorites-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-favorites"
                                                                type="button" role="tab" aria-controls="pills-favorites"
                                                                aria-selected="false"><i class="icofont-license"></i>
                                                                Owned</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-groups-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-groups"
                                                                type="button" role="tab" aria-controls="pills-groups"
                                                                aria-selected="false"><i class="icofont-puzzle"></i>
                                                                Created</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="pills-friends-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-friends"
                                                                type="button" role="tab" aria-controls="pills-friends"
                                                                aria-selected="false"><i class="icofont-library"></i>
                                                                Collection</button>
                                                        </li>

                                                        <li class="custom-select">
                                                            <select>
                                                                <option value="1">All</option>
                                                                <option value="2">Recent</option>
                                                                <option value="3">Relevant</option>
                                                                <option value="4">Popular</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content activity-content" id="pills-tabContent">
                                                        <div class="tab-pane fade" id="pills-personal" role="tabpanel"
                                                            aria-labelledby="pills-personal-tab">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <!-- create item -->
                                                                    <h3>Upload NFT</h3>
                                                                    <div class="create-nft py-5 px-4">
                                                                        <form class="create-nft-form" action="upload.php" method="post" enctype="multipart/form-data">
                                                                            <!-- upload field -->
                                                                            <div class="upload-item mb-30">
                                                                                <p>PNG,JPG,JPEG,SVG,WEBP,Mp3 & Mp4
                                                                                    (Max-150mb)</p>
                                                                                <div class="custom-upload">
                                                                                    <i class="icofont-upload-alt"></i>
                                                                                        Upload a file
                                                                                    <input type="file" class="file-input" name="file" id="file" value="Upload">
                                                                                </div>
                                                                            </div>
                                                                            <!-- item name input -->
                                                                            <div
                                                                                class="form-floating item-name-field mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="itemNameInput"
                                                                                    placeholder="Item Name"
                                                                                    name="title">
                                                                                <label for="itemNameInput">Item
                                                                                    Name</label>
                                                                            </div>
                                                                            <!-- item-description -->
                                                                            <div
                                                                                class="form-floating item-desc-field mb-30">
                                                                                <input type="text" class="form-control"
                                                                                        id="itemDesc"
                                                                                        placeholder="Item Description"
                                                                                        name="description">
                                                                                    <label for="itemDesc">Item Description</label>
                                                                            </div>
                                                                            <!-- item-category -->
                                                                            <div class="form-floating item-desc-field mb-30">
                                                                                <p>Item Category</p>
                                                                                <select name="category">
                                                                                    <option value="Art" name="category">Art</option>
                                                                                    <option value="Collectibles" name="category">Collectibles</option>
                                                                                    <option value="Music" name="category">Music</option>
                                                                                    <option value="Photography"name="category">Photography</option>
                                                                                    <option value="Sports" name="category">Sports</option>
                                                                                    <option value="Trading Cards" name="category">Trading Cards</option>
                                                                                    <option value="Virtual Worlds" name="category">Virtual Worlds</option>
                                                                                </select>
                                                                            </div>
                                                                            <!-- Royalites, Size & copy -->
                                                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                                                                            <!-- submit button -->
                                                                            <div class="submit-btn-field text-center">
                                                                            <button type="submit"><input type="submit" class="submit-btn-field text-center" value="submit" name="submit"></button>
                                                                                    
                                                                            </div>

                                                                        </form>

                                                                        
                                                                        
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <!-- upload nft bid-->
                                                                    <h3>Upload NFT To Bid</h3>
                                                                    <div class="create-nft py-5 px-4">
                                                                        <form class="create-nft-form" action="uploadbid.php" method="post" enctype="multipart/form-data">
                                                                            <!-- upload field -->
                                                                            <div class="upload-item mb-30">
                                                                                <p>PNG,JPG,JPEG,SVG,WEBP,Mp3 & Mp4
                                                                                    (Max-150mb)</p>
                                                                                <div class="custom-upload">
                                                                                    <i class="icofont-upload-alt"></i>
                                                                                        Upload a file
                                                                                    <input type="file" class="file-input" name="file" id="file" value="Upload">
                                                                                </div>
                                                                            </div>
                                                                            <!-- item name input -->
                                                                            <div
                                                                                class="form-floating item-name-field mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="itemNameInput"
                                                                                    placeholder="Item Name"
                                                                                    name="title">
                                                                                <label for="itemNameInput">Item
                                                                                    Name</label>
                                                                            </div>
                                                                            <!-- item-description -->
                                                                            <div
                                                                                class="form-floating item-desc-field mb-30">
                                                                                <input type="text" class="form-control"
                                                                                        id="itemDesc"
                                                                                        placeholder="Item Description"
                                                                                        name="description">
                                                                                    <label for="itemDesc">Item Description</label>
                                                                            </div>
                                                                            <!-- item-category -->
                                                                            <div class="form-floating item-desc-field mb-30">
                                                                                <p>Item Category</p>
                                                                                <select name="category">
                                                                                    <option value="Art" name="category">Art</option>
                                                                                    <option value="Collectibles" name="category">Collectibles</option>
                                                                                    <option value="Music" name="category">Music</option>
                                                                                    <option value="Photography"name="category">Photography</option>
                                                                                    <option value="Sports" name="category">Sports</option>
                                                                                    <option value="Trading Cards" name="category">Trading Cards</option>
                                                                                    <option value="Virtual Worlds" name="category">Virtual Worlds</option>
                                                                                </select>
                                                                            </div>
                                                                            <!-- item price -->
                                                                            <div class="item-price-field mb-3">
                                                                                <div class="row g-3">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-floating">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="itemPriceInput"
                                                                                                placeholder="Item Price"
                                                                                                name="start_bid_price">
                                                                                            <label
                                                                                                for="itemPriceInput">Start Bid Price</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="item-price-field mb-3">
                                                                                <div class="row g-3">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-floating">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                id="itemPriceInput"
                                                                                                placeholder="Item Price"
                                                                                                name="buy_now">
                                                                                            <label
                                                                                                for="itemPriceInput">Buy Now Price</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- auction time -->
                                                                            <div class="item-price-field mb-3">
                                                                                <div class="row g-3">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-floating">
                                                                                            <input type="datetime-local"
                                                                                                class="form-control"
                                                                                                id="auctionstart"
                                                                                                name="auction_start">
                                                                                            <label
                                                                                                for="itemPriceInput">Auction Start Time</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>               
                                                                            <div class="item-price-field mb-3">
                                                                                <div class="row g-3">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-floating">
                                                                                            <input type="datetime-local"
                                                                                                class="form-control"
                                                                                                id="auctionend"
                                                                                                name="auction_end">
                                                                                            <label
                                                                                                for="itemPriceInput">Auction End Time</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>   
                                                                            <!-- Royalites, Size & copy -->

                                                                            <!-- submit button -->
                                                                            <div class="submit-btn-field text-center">
                                                                                <button type="submit"><input type="submit" name="submit" class="submit-btn-field text-center"></button>
                                                                                    
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade mentions-section show active"
                                                            id="pills-mentions" role="tabpanel"
                                                            aria-labelledby="pills-mentions-tab">
                                                            <div class="row justify-content-center gx-3 gy-2">
                                                            <?php
                                                                    $tampil = mysqli_query($connect, "SELECT * FROM nft");
                                                                    if(mysqli_num_rows($tampil)>0){
                                                                        while($t = mysqli_fetch_array($tampil)){ ?>
                                                                    <div class="col-lg-4 col-sm-6">
                                                                    <div class="nft-item light-version">
                                                                        <div class="nft-inner">
                                                                            <!-- nft top part -->
                                                                            <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                                                <div class="author-part">
                                                                                    <ul class="author-list d-flex">
                                                                                        <li class="single-author">
                                                                                            <a href="../bid/item-bid.php"><img
                                                                                            src="../assets/images/seller/01.gif"
                                                                                            alt="author-img"></a>                                                                
                                                                                        </li>
                                                                                        <li
                                                                                        class="single-author d-flex align-items-center">
                                                                                        <a href="../bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"
                                                                                            class="veryfied"><img
                                                                                                src="../assets/images/seller/01.png"
                                                                                                alt="author-img"></a>
                                                                                        <h6><a href="../bid/item-bid.php">Jhon Doe</a>
                                                                                        </h6>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>                                                                
                                                                            <div class="more-part">
                                                                                <div class=" dropstart">
                                                                                    <a class=" dropdown-toggle"
                                                                                        href="#" role="button"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="false"
                                                                                        data-bs-offset="25,0">
                                                                                        <i
                                                                                            class="icofont-flikr"></i>
                                                                                    </a>

                                                                                    <ul class="dropdown-menu">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="#"><span>
                                                                                                    <i
                                                                                                        class="icofont-warning"></i>
                                                                                                </span> Report </a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="#"><span><i
                                                                                                        class="icofont-reply"></i></span>
                                                                                                Share</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- nft-bottom part -->
                                                                        <div class="nft-item-bottom">
                                                                            <div class="nft-thumb">
                                                                                <img src="nftimage/<?php echo $t['photo'] ?>"
                                                                                    alt="nft-img">

                                                                                <!-- nft countdwon -->
                                                                                <!-- <ul class="nft-countdown count-down"
                                                                                    data-date="July 05, 2022 21:14:01">
                                                                                    <li>
                                                                                        <span
                                                                                            class="days">34</span><span
                                                                                            class="count-txt">D</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span
                                                                                            class="hours">09</span><span
                                                                                            class="count-txt">H</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span
                                                                                            class="minutes">32</span><span
                                                                                            class="count-txt">M</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span
                                                                                            class="seconds">32</span><span
                                                                                            class="count-txt">S</span>
                                                                                    </li>
                                                                                </ul> -->
                                                                            </div>
                                                                            <div class="nft-content">
                                                                                <h4><a href="item-details.html"><?php echo $t['title'] ?></a> </h4>
                                                                                <div
                                                                                    class="price-like d-flex justify-content-between align-items-center">
                                                                                    
                                                                                    <a href="#" class="nft-like"><i
                                                                                            class="icofont-heart"></i>
                                                                                        230</a>
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
                                                        <div class="tab-pane fade" id="pills-favorites" role="tabpanel"
                                                            aria-labelledby="pills-favorites-tab">
                                                            <div class="row justify-content-center gx-3 gy-2">
                                                                <?php
                                                                    $tampil = mysqli_query($connect, "SELECT * FROM nft");
                                                                    if(mysqli_num_rows($tampil)>0){
                                                                        while($t = mysqli_fetch_array($tampil)){ ?>
                                                                    <div class="col-lg-4 col-sm-6">
                                                                    <div class="nft-item light-version">
                                                                        <div class="nft-inner">
                                                                            <!-- nft top part -->
                                                                            <div class="nft-item-top d-flex justify-content-between align-items-center">
                                                                                <div class="author-part">
                                                                                    <ul class="author-list d-flex">
                                                                                        <li class="single-author">
                                                                                            <a href="../bid/item-bid.php"><img
                                                                                            src="../assets/images/seller/01.gif"
                                                                                            alt="author-img"></a>                                                                
                                                                                        </li>
                                                                                        <li
                                                                                        class="single-author d-flex align-items-center">
                                                                                        <a href="../bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"
                                                                                            class="veryfied"><img
                                                                                                src="../assets/images/seller/01.png"
                                                                                                alt="author-img"></a>
                                                                                        <h6><a href="../bid/item-bid.php">Jhon Doe</a>
                                                                                        </h6>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>                                                                
                                                                            <div class="more-part">
                                                                                <div class=" dropstart">
                                                                                    <a class=" dropdown-toggle"
                                                                                        href="#" role="button"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="false"
                                                                                        data-bs-offset="25,0">
                                                                                        <i
                                                                                            class="icofont-flikr"></i>
                                                                                    </a>

                                                                                    <ul class="dropdown-menu">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="#"><span>
                                                                                                    <i
                                                                                                        class="icofont-warning"></i>
                                                                                                </span> Report </a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="#"><span><i
                                                                                                        class="icofont-reply"></i></span>
                                                                                                Share</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- nft-bottom part -->
                                                                        <div class="nft-item-bottom">
                                                                            <div class="nft-thumb">
                                                                                <img src="nftimage/<?php echo $t['photo'] ?>"
                                                                                    alt="nft-img">

                                                                                <!-- nft countdwon -->
                                                                                <!-- <ul class="nft-countdown count-down"
                                                                                    data-date="July 05, 2022 21:14:01">
                                                                                    <li>
                                                                                        <span
                                                                                            class="days">34</span><span
                                                                                            class="count-txt">D</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span
                                                                                            class="hours">09</span><span
                                                                                            class="count-txt">H</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span
                                                                                            class="minutes">32</span><span
                                                                                            class="count-txt">M</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span
                                                                                            class="seconds">32</span><span
                                                                                            class="count-txt">S</span>
                                                                                    </li>
                                                                                </ul> -->
                                                                            </div>
                                                                            <div class="nft-content">
                                                                                <h4><a href="item-details.html"><?php echo $t['title'] ?></a> </h4>
                                                                                <div
                                                                                    class="price-like d-flex justify-content-between align-items-center">
                                                                                    <p class="nft-price">Price:
                                                                                        <span
                                                                                            class="yellow-color">0.34
                                                                                            ETH</span>
                                                                                    </p>
                                                                                    <a href="#" class="nft-like"><i
                                                                                            class="icofont-heart"></i>
                                                                                        230</a>
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
                                            </article>
                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- about tab -->
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <article>

                                                <div class="info-card mb-3">
                                                    <div class="info-card-title">
                                                        <h4>About</h4>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <p>Collaboratively innovate compelling mindshare after
                                                            prospective partnerships Competently sereiz long-term
                                                            high-impact internal or "organic" sources via user friendly
                                                            strategic themesr areas creat Dramatically coordinate
                                                            premium partnerships rather than standards compliant
                                                            technologies ernd Dramatically matrix ethical collaboration
                                                            and idea-sharing through opensource methodologies and
                                                            Intrinsicly grow collaborative platforms vis-a-vis effective
                                                            scenarios. Energistically strategize cost effective ideas
                                                            before the worke unde.</p>
                                                    </div>
                                                </div>
                                                <div class="info-card">
                                                    <div class="info-card-title">
                                                        <h4>Other Info</h4>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Name</p>
                                                                <p class="info-details"><p><?php echo $_SESSION['name'];?></p></p>
                                                            </li>
                                                            <?php } ?>
                                                            <li>
                                                                <p class="info-name">Country</p>
                                                                <p class="info-details">USA</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Specialize in</p>
                                                                <p class="info-details">Art</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Wallet Add</p>
                                                                <p class="info-details">fdffx1xr394k..dfdk23sl</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Age</p>
                                                                <p class="info-details">36</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Date of Birth</p>
                                                                <p class="info-details">27-02-1996</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Address</p>
                                                                <p class="info-details">Streop Rd, Peosur, Inphodux,
                                                                    USA.</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-3">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="profile-widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Search NFT</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Search from best Rarest NFT collections</p>
                                                            <div class="form-floating nft-search-input">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search NFT">
                                                                <label>Search NFT</label>
                                                                <button type="button"> <i
                                                                        class="icofont-search-1"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget widget-instagram">
                                                    <div class="widget-header">
                                                        <h5 class="title">Featured NFT</h5>
                                                    </div>
                                                    <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/01.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/01.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/02.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/02.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/03.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/03.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/04.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/04.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/05.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/05.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/06.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/06.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/07.jp"><img loading="lazy"
                                                                    src="../assets/images/nft-item/07.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/08.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/08.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/09.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/09.jpg"
                                                                    alt="nft-img"></a></li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- activity Tab -->
                            <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="nav-activity-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <article>
                                                <h4 class="h4-title">Author's Activity</h4>
                                                <div class="row gy-3">
                                                    <div class="col-12">
                                                        <div class="activity-item light-version">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-3 p-md-4">
                                                                <div class="lab-thumb me-3 me-md-4">
                                                                    <img src="../assets/images/activity/01.gif" alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4><a href="nft-single.html">Gold digger x</a>
                                                                    </h4>
                                                                    <p class="mb-2">GOLD DIGGER (x Antoni Tudisco)
                                                                        #44/44 was put up for sale for
                                                                        <b>0.0991
                                                                            ETH</b>
                                                                    </p>
                                                                    <p class="user-id">By: <a
                                                                            href="author.html">@rasselmrh</a></p>
                                                                    <p>At: 10/07/2021, 10:03 am</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="activity-item light-version">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-3 p-md-4">
                                                                <div class="lab-thumb me-3 me-md-4">
                                                                    <img src="../assets/images/activity/02.gif" alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4><a href="nft-single.html">ghost lix xrf</a>
                                                                    </h4>
                                                                    <p class="mb-2">two rare collection purchased for
                                                                        <b>0.001
                                                                            ETH</b>
                                                                    </p>
                                                                    <p class="user-id">By: <a
                                                                            href="author.html">@reo2lxsr</a></p>
                                                                    <p>At: 10/07/2021, 08:23 am</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="activity-item light-version">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-3 p-md-4">
                                                                <div class="lab-thumb me-3 me-md-4">
                                                                    <img src="../assets/images/activity/04.gif" alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4><a href="nft-single.html">Trust In meh </a>
                                                                    </h4>
                                                                    <p class="mb-2">The Shopping Cart #54/65 was put up
                                                                        for sale for <b>0.021
                                                                            ETH</b>
                                                                    </p>
                                                                    <p class="user-id">By: <a
                                                                            href="author.html">@reo2lxsr</a></p>
                                                                    <p>At: 10/07/2021, 12:03 am</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="activity-item light-version">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-3 p-md-4">
                                                                <div class="lab-thumb me-3 me-md-4">
                                                                    <img src="../assets/images/activity/05.gif" alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4><a href="nft-single.html">Sysytan #0le </a>
                                                                    </h4>
                                                                    <p class="mb-2">A offer of $200.00 was placed for
                                                                        ÜNDERSTANDING (Sean Williams) #1/20
                                                                    </p>
                                                                    <p class="user-id">By: <a
                                                                            href="author.html">@reo2lxsr</a></p>
                                                                    <p>At: 10/07/2021, 10:03 am</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="activity-item light-version">
                                                            <div
                                                                class="lab-inner d-flex flex-wrap align-items-center p-3 p-md-4">
                                                                <div class="lab-thumb me-3 me-md-4">
                                                                    <img src="../assets/images/activity/03.gif" alt="img">
                                                                </div>
                                                                <div class="lab-content">
                                                                    <h4><a href="nft-single.html">ghost lix xrf</a>
                                                                    </h4>
                                                                    <p class="mb-2">two rare collection purchased for
                                                                        <b>0.001
                                                                            ETH</b>
                                                                    </p>
                                                                    <p class="user-id">By: <a
                                                                            href="author.html">@reo2lxsr</a></p>
                                                                    <p>At: 10/07/2021, 02:03 pm</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-3">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="profile-widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Search NFT</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Search from best Rarest NFT collections</p>
                                                            <div class="form-floating nft-search-input">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search NFT">
                                                                <label>Search NFT</label>
                                                                <button type="button"> <i
                                                                        class="icofont-search-1"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget widget-instagram">
                                                    <div class="widget-header">
                                                        <h5 class="title">Featured NFT</h5>
                                                    </div>
                                                    <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/01.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/01.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/02.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/02.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/03.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/03.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/04.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/04.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/05.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/05.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/06.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/06.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/07.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/07.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/08.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/08.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/09.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/09.jpg"
                                                                    alt="nft-img"></a></li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- follower Tab -->
                            <div class="tab-pane fade" id="follower" role="tabpanel" aria-labelledby="nav-follower-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="follow-wrapper">
                                                <h4 class="h4-title">All Followers</h4>
                                                <div class="row g-3">
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">21</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/02.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Andrea Guido</a>
                                                                            </h5>
                                                                            <p>$23,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">99</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/01.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Xrl5 Yo</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">65</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/01.gif"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Picha lx</a>
                                                                            </h5>
                                                                            <p>$4,302.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">05</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/03.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Xrl5 Yo</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">14</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/04.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Jhon doe</a>
                                                                            </h5>
                                                                            <p>$13,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">12</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/03.gif"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">somrat ux</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">99</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/05.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">rax el</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">79</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/06.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Bigl5 Yo</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">65</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/07.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Picha lx</a>
                                                                            </h5>
                                                                            <p>$4,302.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">05</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/03.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Xrl5 Yo</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">14</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/05.gif"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">Jhon doe</a>
                                                                            </h5>
                                                                            <p>$13,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="seller-item light-version">
                                                            <div class="seller-inner">
                                                                <div class="seller-part">
                                                                    <p class="assets-number">12</p>
                                                                    <div class="assets-owner">
                                                                        <div class="owner-thumb veryfied">
                                                                            <a href="author.html"><img
                                                                                    src="../assets/images/seller/09.png"
                                                                                    alt="seller-img"></a>
                                                                        </div>
                                                                        <div class="owner-content">
                                                                            <h5><a href="author.html">razx frd</a>
                                                                            </h5>
                                                                            <p>$2,002.98</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="follow-part">
                                                                    <button class="btn-follow follow-state">
                                                                        <span class="follow"><i
                                                                                class="fa fa-user-plus"></i>
                                                                            Follow</span>
                                                                        <span class="unfollow">Unfollow</span>
                                                                        <span class="following">Following</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="load-btn">
                                                    <a href="#" class="default-btn move-bottom"><span>Load
                                                            More</span> </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-3">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="profile-widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Search NFT</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Search from best Rarest NFT collections</p>
                                                            <div class="form-floating nft-search-input">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search NFT">
                                                                <label>Search NFT</label>
                                                                <button type="button"> <i
                                                                        class="icofont-search-1"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget widget-instagram">
                                                    <div class="widget-header">
                                                        <h5 class="title">Featured NFT</h5>
                                                    </div>
                                                    <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/01.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/01.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/02.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/02.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/03.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/03.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/04.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/04.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/05.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/05.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/06.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/06.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/07.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/07.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/08.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/08.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/09.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/09.jpg"
                                                                    alt="nft-img"></a></li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- following Tab -->
                            <div class="tab-pane fade" id="following" role="tabpanel"
                                aria-labelledby="nav-following-tab">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <div class="follow-wrapper">
                                            <h4 class="h4-title">Following</h4>
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">21</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/02.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Andrea Guido</a>
                                                                        </h5>
                                                                        <p>$23,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">99</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/01.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Xrl5 Yo</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">65</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/01.gif"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Picha lx</a>
                                                                        </h5>
                                                                        <p>$4,302.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">05</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/03.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Xrl5 Yo</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">14</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/04.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Jhon doe</a>
                                                                        </h5>
                                                                        <p>$13,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">12</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/03.gif"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">somrat ux</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">99</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/05.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">rax el</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">79</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/06.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Bigl5 Yo</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">65</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/07.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Picha lx</a>
                                                                        </h5>
                                                                        <p>$4,302.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">05</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/03.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Xrl5 Yo</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">14</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/05.gif"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">Jhon doe</a>
                                                                        </h5>
                                                                        <p>$13,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="seller-item light-version">
                                                        <div class="seller-inner">
                                                            <div class="seller-part">
                                                                <p class="assets-number">12</p>
                                                                <div class="assets-owner">
                                                                    <div class="owner-thumb veryfied">
                                                                        <a href="author.html"><img
                                                                                src="../assets/images/seller/09.png"
                                                                                alt="seller-img"></a>
                                                                    </div>
                                                                    <div class="owner-content">
                                                                        <h5><a href="author.html">razx frd</a>
                                                                        </h5>
                                                                        <p>$2,002.98</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="follow-part activefollow">
                                                                <button class="btn-follow follow-state">
                                                                    <span class="follow"><i class="fa fa-user-plus"></i>
                                                                        Follow</span>
                                                                    <span class="unfollow">Unfollow</span>
                                                                    <span class="following">Following</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="load-btn">
                                                <a href="#" class="default-btn move-bottom"><span>Load
                                                        More</span> </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Aside Part -->
                                    <div class="col-xl-3">
                                        <aside class="mt-5 mt-xl-0">
                                            <div class="profile-widget search-widget">
                                                <div class="widget-inner">
                                                    <div class="widget-title">
                                                        <h5>Search NFT</h5>
                                                    </div>
                                                    <div class="widget-content">
                                                        <p>Search from best Rarest NFT collections</p>
                                                        <div class="form-floating nft-search-input">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search NFT">
                                                            <label>Search NFT</label>
                                                            <button type="button"> <i
                                                                    class="icofont-search-1"></i></button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget widget-instagram">
                                                <div class="widget-header">
                                                    <h5 class="title">Featured NFT</h5>
                                                </div>
                                                <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/01.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/01.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/02.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/02.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/03.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/03.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/04.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/04.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/05.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/05.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/06.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/06.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/07.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/07.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/08.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/08.jpg" alt="nft-img"></a>
                                                    </li>
                                                    <li><a data-rel="lightcase"
                                                            href="../assets/images/nft-item/09.jpg"><img loading="lazy"
                                                                src="../assets/images/nft-item/09.jpg" alt="nft-img"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                            <!-- wallet Tab -->
                            <div class="tab-pane fade" id="wallet" role="tabpanel" aria-labelledby="nav-wallet-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="wallet-wrapper">
                                                <div class="wallet-title">
                                                    <h4>Connect your wallet</h4>
                                                    <p>Connect with one of available wallet providers or <a
                                                            href="signup.html">create a
                                                            new wallet</a></p>
                                                </div>
                                                <div class="wallet-section">
                                                    <div class="wallet-inner">
                                                        <div class="row g-3">
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/06.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Meta Mask</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/07.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Binance</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/08.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Formatic</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/01.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Autherum</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/02.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Bitski</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/03.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Coinbase</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/04.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Dapper</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6">
                                                                <div class="wallet-item light-version">
                                                                    <div class="wallet-item-inner">
                                                                        <div class="wallet-thumb">
                                                                            <a href="signin.html">
                                                                                <img src="../assets/images/wallet/05.png"
                                                                                    alt="wallet-img">
                                                                            </a>
                                                                        </div>
                                                                        <div class="wallet-content">
                                                                            <h5><a href="signin.html">Portis</a></h5>
                                                                            <p>Lorem ipsum dolor sit amet consectetur.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mt-5 wallet-notice"><span class="me-1 theme-color"><i
                                                                    class="icofont-bulb-alt"></i></span> We
                                                            do not own your private keys and cannot access your funds
                                                            without your confirmation.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Aside Part -->
                                        <div class="col-xl-3">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="profile-widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Search NFT</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Search from best Rarest NFT collections</p>
                                                            <div class="form-floating nft-search-input">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search NFT">
                                                                <label>Search NFT</label>
                                                                <button type="button"> <i
                                                                        class="icofont-search-1"></i></button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget widget-instagram">
                                                    <div class="widget-header">
                                                        <h5 class="title">Featured NFT</h5>
                                                    </div>
                                                    <ul class="widget-wrapper d-flex flex-wrap justify-content-center">
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/01.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/01.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/02.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/02.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/03.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/03.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/04.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/04.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/05.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/05.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/06.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/06.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/07.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/07.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/08.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/08.jpg"
                                                                    alt="nft-img"></a></li>
                                                        <li><a data-rel="lightcase"
                                                                href="../assets/images/nft-item/09.jpg"><img loading="lazy"
                                                                    src="../assets/images/nft-item/09.jpg"
                                                                    alt="nft-img"></a></li>
                                                    </ul>
                                                </div>
                                            </aside>
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
    <!-- ==========Profile Section Ends Here========== -->


<?php include "include/footer.php"; ?>