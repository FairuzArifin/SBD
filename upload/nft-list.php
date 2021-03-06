<?php
    include "../includes/connect.php";
    include "include/header.php";
?>

<section class="explore-section light-version padding-top padding-bottom">
        <div class="container">
            <div class="section-header light-version">
                <div class="nft-filter d-flex flex-wrap justify-content-center">
                <label for="catSelect">Select a Category</label>
                <div class="form-floating item-desc-field">
                        <form action="search2.php" method="get"> 
                        <select name="category">
                        <option value="Art" name="category">Art</option>
                        <option value="Collectibles" name="category">Collectibles</option>
                        <option value="Music" name="category">Music</option>
                        <option value="Photography"name="category">Photography</option>
                        <option value="Sports" name="category">Sports</option>
                        <option value="Trading Cards" name="category">Trading Cards</option>
                        <option value="Virtual Worlds" name="category">Virtual Worlds</option>
                    </select>
                        <button type="submit">Tes</button>
                        </form>
                    </div>
                    
                </div>
                <div class="nft-search">
                    <div class="form-floating nft-search-input">
                    <form method="get" action="search.php">
                        <input type="text" class="form-control" id="nftSearch" placeholder="Search NFT" name="cari">
                        
                    </form>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="explore-wrapper">
                    <div class="row justify-content-center gx-4 gy-3">
                    <?php
                            $tampil = mysqli_query($connect, "SELECT * FROM nft
                            JOIN kepemilikan
                            ON kepemilikan.nft_id = nft.nft_id
                            JOIN user
                            ON user.user_id = kepemilikan.user_id
                            WHERE status_nft=0");
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
                                    <a href="author.html"><img
                                    src="../assets/images/seller/01.gif"
                                    alt="author-img"></a>                                                                
                                </li>
                                <li
                                class="single-author d-flex align-items-center">
                                <a href="author.html"
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
                    <?php }} ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>



<?php include "../includes/footer.php"; ?>