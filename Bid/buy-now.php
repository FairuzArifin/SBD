
<?php
include '../includes/connect.php';

$user_id = 2101;
$nft_id = 9;

$check = "SELECT *
            FROM bid
            JOIN nft
            ON bid.nft_id = nft.nft_id
            WHERE bid.nft_id = $nft_id";

$q = mysqli_query($connect, $check);
$time = mysqli_fetch_assoc($q);
$start = $time['auction_start'];
$end = $time['auction_end'];
$now = date("Y-m-d h:i:s");

if(strtotime($start) > strtotime($now)){
    echo "<script>alert('Lelang Belum Dimulai');history.go(-1) </script>";}
elseif(strtotime($now) > strtotime($end)){
echo "<script>alert('NFT Already Sold');history.go(-1) </script>";}
else{
    $sql = "UPDATE `nft` SET `status_nft` = '1' WHERE `nft`.`nft_id` = $nft_id";
    if($connect->query($sql)===TRUE){
        echo "<script>alert('Buy Now Success');history.go(-1) </script>";
    }
    } 

?>