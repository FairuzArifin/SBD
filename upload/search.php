<?php
    include "connection.php";
    include "include/header.php";
?>
<section class="profile-section light-version padding-top padding-bottom">
    <h3 align="center">Search result:</h3><br>
    <div class="row justify-content-center gx-3 gy-2">
        <?php

        $tampil = mysqli_query($con, "SELECT * FROM nft");

        if($_GET['cari'] != ''){
        $query = "SELECT * 
                    FROM nft 
                    WHERE title 
                    LIKE '%".$_GET['cari']."%'";
        $tampil = mysqli_query($con, $query);
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
                                        <a href="author.html"><img
                                        src="assets/images/seller/01.gif"
                                        alt="author-img"></a>                                                                
                                    </li>
                                    <li
                                    class="single-author d-flex align-items-center">
                                    <a href="author.html"
                                        class="veryfied"><img
                                            src="assets/images/seller/01.png"
                                            alt="author-img"></a>
                                    <h6><a href="author.html">Jhon Doe</a>
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
        <?php } ?>
    </div>
        </section>

<?php
    include "include/footer.php";
?>