<?php
    include '../includes/connect.php';
    $nid = $_GET['nft_id'];
    $query = "SELECT * FROM nft WHERE nft_id = $nid";
    $out = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($out);
    ?>

    <?php
    include "include/header.php";

    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    ?>
    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1 light-version">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Upload NFT to Bid</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="../index.php">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
 
    <div class="py-5 px-4">
    <form class="create-nft-form" action="process-updatebid.php" method="POST">
        
        <!-- item name input -->
        <div
            class="form-floating item-name-field mb-3">
            <input type="text" class="form-control"
                id="itemNameInput"
                placeholder="<?php echo $row['title'];?>"
                name="title"
                disabled="disabled">
            <label for="itemNameInput"><?php echo $row['title'];?></label>
        </div>
        <!-- item-description -->
        <div
            class="form-floating item-desc-field mb-30">
            <input type="text" class="form-control"
                    id="itemDesc"
                    placeholder="<?php echo $row['description'];?>"
                    name="description"
                    disabled="disabled">
                <label for="itemDesc"><?php echo $row['description'];?></label>
        </div>
        <!-- item-category -->
        <div class="form-floating item-desc-field mb-30">
            <p>Item Category</p>
            <select name="category" disabled="disabled">
                <option value="Art" name="category"><?php echo $row['category'];?></option>
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
                            name="bidprice">
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
                            placeholder="Buy Now"
                            name="buynow">
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
        <input type="hidden" name="nft_id" value="<?php echo $nid ?>" />   

        <!-- submit button -->
        <div>
            <button type = "submit" class="default-btn move-right mt-3 me-5"><span>Submit</span> </button>              
        </div>
    </form>
    </div>
    <!-- Batas -->
    <?php } ?>
    <?php include "include/footer.php"; ?>
    