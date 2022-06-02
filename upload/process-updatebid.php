<?php 

    include "../includes/connect.php";
    include "include/header.php";
    $nft_id = $_POST['nft_id'];
    $startprice = $_POST['bidprice'];
    $buynow = $_POST['buynow'];
    $start = $_POST['auction_start'];
    $end = $_POST['auction_end'];



    if(isset($_POST['submit'])){
    $q = "UPDATE bid 
            SET start_bid_price = $startprice, 
                auction_start = $start, 
                auction_end = $end, buy_now = $buynow 
            WHERE nft_id = $nft_id";
        mysqli_query($connect, $q);
}

           echo '<section class="profile-section light-version padding-top padding-bottom">
           <center>
           <h3>NFT UPLOADED</h3> <br>
           <a href="author.php"><h3>Back</h3></a>
           </center>
           </section>'; 
    include "../includes/footer.php";
?>
