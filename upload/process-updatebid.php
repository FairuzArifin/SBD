<?php 

    include "../includes/connect.php";
    include "include/header.php";
    $nft_id = $_POST['nft_id'];
    $startprice = $_POST['bidprice'];
    $buynow = $_POST['buynow'];
    $start = $_POST['auction_start']; 
    $start1 = date("Y-m-d h:i:sa", strtotime($start));

    $end = $_POST['auction_end'];
    $end1 = date("Y-m-d h:i:sa", strtotime($start));

    $q = "UPDATE bid 
        SET `start_bid_price` = '$startprice',
             `auction_start` = '$start', 
             `auction_end` = '$end', 
             `buy_now` = '$buynow' 
             WHERE `bid`.`nft_id` = $nft_id";
    
if($connect->query($q)===TRUE){
    $sql = "UPDATE `nft` SET `status_nft` = '0' WHERE `nft`.`nft_id` = $nft_id";
    mysqli_query($connect, $sql);
            
    echo '<section class="profile-section light-version padding-top padding-bottom">
           <center>
           <h3>BID UPDATED</h3> <br>
           <a href="item-details.php?nft_id="';
           echo $nft_id;
    echo '"><h3>Back</h3></a>
           </center>
           </section>';
} else{
    echo "Error : " .$q."<br/>".$connect->error;
}
    include "../includes/footer.php";
?>
