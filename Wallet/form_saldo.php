<?php
    include "../upload/connection.php";
    include "../upload/include/header.php";
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
                        <li class="active">Alex Joe</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->

                                <!-- All NFT tab -->

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
                                                                                <input type="text" class="form-control"
                                                                                        id="itemNameInput"
                                                                                        placeholder="Item Category"
                                                                                        name="category">
                                                                                        <label for="itemDesc">Item Category</label>
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
                                                                                                for="itemPriceInput">Item
                                                                                                Price</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Royalites, Size & copy -->

                                                                            <!-- submit button -->
                                                                            <div class="submit-btn-field text-center">
                                                                            <button type="submit"><input type="submit" class="submit-btn-field text-center" value="submit" name="submit"></button>
                                                                                    
                                                                            </div>
                                                                        </form>
                                                                        
                                                                        
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    


<?php include "../upload/include/footer.php"; ?>