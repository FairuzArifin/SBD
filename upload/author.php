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
                                                                Owned</button>
                                                        </li>

                                                    </ul>
                                                    <div class="tab-content activity-content" id="pills-tabContent">
                                                        <div class="tab-pane fade" id="pills-personal" role="tabpanel"
                                                            aria-labelledby="pills-personal-tab">
                                                            <div class="row">
                                                                <div class="col">

                                                                    <!-- upload nft bid-->
                                                                    <h3>Upload NFT To Bid</h3>
                                                                    <div class="create-nft py-5 px-4">
                                                                        <form class="create-nft-form" action="uploadbid.php" method="post" enctype="multipart/form-data">
                                                                        <input type="text" name="user_id" value="<?php echo $_SESSION['user_id']?>" hidden>
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
                                                            $uid = $_SESSION['user_id'];
                                                                    $q = "SELECT * FROM nft
                                                                                JOIN kepemilikan
                                                                                ON kepemilikan.nft_id = nft.nft_id
                                                                                JOIN user
                                                                                ON user.user_id = kepemilikan.user_id
                                                                                WHERE kepemilikan.user_id = $uid";
                                                                    $tampil = mysqli_query($connect, $q);
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
                                                                                        <h6><a href="../bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"><?php echo $t['name'] ?></a>
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


                                                                            </div>
                                                                            <div class="nft-content">
                                                                                <h4><a href="../bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"><?php echo $t['title'] ?></a> </h4>
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
                                            </article>
                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Profile Section Ends Here========== -->


<?php include "include/footer.php"; ?>
