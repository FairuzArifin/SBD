    <?php
    include '../includes/connect.php';
    $nid = $_GET['nft_id'];
    $query = "SELECT * FROM nft WHERE nft_id = $nid";
    $out = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($out);

    ?>
    <form class="create-nft-form" action="process-updatebid.php" method="POST">
        
        <!-- item name input -->
        <div
            class="form-floating item-name-field mb-3">
            <input type="text" class="form-control"
                id="itemNameInput"
                placeholder="<?php echo $row['title'];?>"
                name="title"
                disabled="disabled">
            <label for="itemNameInput"></label>
        </div>
        <!-- item-description -->
        <div
            class="form-floating item-desc-field mb-30">
            <input type="text" class="form-control"
                    id="itemDesc"
                    placeholder="<?php echo $row['description'];?>"
                    name="description"
                    disabled="disabled">
                <label for="itemDesc"></label>
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
        <div class="submit-btn-field text-center">
            <button type="submit"><input type="submit" name="submit" class="submit-btn-field text-center"></button>
                
        </div>
    </form>