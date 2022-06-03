<?php
    include "../includes/connect.php";
    include "include/header.php";
?>
<section class="profile-section light-version padding-top padding-bottom">
    <h3 align="center">Search result:</h3><br>
    <div class="row justify-content-center gx-3 gy-2">
        <?php

        $tampil = mysqli_query($connect, "SELECT * FROM nft");

        if($_GET['category'] != ''){
        $query = "SELECT * FROM nft
                    JOIN kepemilikan
                    ON kepemilikan.nft_id = nft.nft_id
                    JOIN user
                    ON user.user_id = kepemilikan.user_id
                    WHERE category
                    LIKE '%".$_GET['category']."%'";
        $tampil = mysqli_query($connect, $query);
        }
        while($t = mysqli_fetch_array($tampil)){
        ?>
            <div class="col-lg-4 col-sm-6">
                <div class="nft-item light-version">
                    <div class="nft-inner">
                        <!-- nft top part -->
                        <div class="nft-item-top d-flex justify-content-between align-items-center">
                            <div class="author-part">
                                <ul class="author-list d-flex">
                                    <li class="single-author">
                                        <a href="../bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"><img
                                        src="assets/images/seller/01.gif"
                                        alt="author-img"></a>                                                                
                                    </li>
                                    <li
                                    class="single-author d-flex align-items-center">
                                    <a href="../bid/item-details.php?nft_id=<?php echo $t['nft_id'] ?>"
                                        class="veryfied"><img
                                            src="assets/images/seller/01.png"
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
                                <?php if (empty($highest_bid)): ?>
                                <?php else: ?>
                            <p class="nft-price">Price:
                                <span
                                    class="yellow-color"><?php echo get_latest_bid($t['nft_id'])?>
                                    ETH</span>
                            </p>
                            <?php endif ;?>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
        </section>

<?php
    include "../includes/footer.php";
?>