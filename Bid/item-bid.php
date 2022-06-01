<?php
include '../includes/connect.php';

$bid =$_POST['bid_amount'];
$user_id = 2101;
$nft_id = 9;

$check = "SELECT MAX(bid_ongoing) AS max FROM bid_ongoing WHERE nft_id = $nft_id";  //check higher bid
$process = mysqli_query($connect, $check);
$row = mysqli_fetch_array($process);
$largestbid = $row['max'];

$limit = "SELECT buy_now AS buy FROM bid_ongoing WHERE nft_id = $nft_id";   // check bid limit
$proc = mysqli_query($connect, $check);
$ro = mysqli_fetch_array($proc);
$buy = $ro['buy'];

$time = "SELECT auction_end AS minn FROM bid WHERE nft_id = $nft_id";   // check auction time
$proces = mysqli_query($connect, $time);
$row2 = mysqli_fetch_array($proces);
$www = $row2['minn'];
$now = date("Y-m-d h:i:sa");

$author = "SELECT user_id AS author FROM kepemilikan WHERE nft_id = $nft_id";   // check buyer
$proce = mysqli_query($connect, $author);
$row3 = mysqli_fetch_array($proce);
$buy = $row3['author'];

if($_SESSION['user_id'] = $row3['author']){
    if($row['mom'] > $bid){
        if(strtotime($www) > strtotime($now)){
            if($bid > $largestbid ){
                $sql = "INSERT INTO bid_ongoing (user_id,nft_id,bid_ongoing) VALUES ('$user_id', '$nft_id', '$bid')";          			                
                if($connect->query($sql)===TRUE){
                    echo "<script>alert('Bidding Success');history.go(-1) </script>";
                } else {
                    echo "Error : " .$sql."<br/>".$connect->error;
                }
            } else {
                echo "<script>alert('Your Bid Must be Higher');history.go(-1) </script>";
            }  
        } else {
                $sql = "UPDATE `nft` SET `status_nft` = '1' WHERE `nft`.`nft_id` = $nft_id";          			                
                    if($connect->query($sql)===TRUE){
                        echo "<script>alert('NFT Already Sold');history.go(-1) </script>";
                    } else {
                        echo "Gagal";
                    }
        }
    } else {
        echo "<script>alert('Bid Amount Higher than Buy Now Amount');history.go(-1) </script>";
    }
}else{
    echo "<script>alert('You Are the Owner -_-');history.go(-1) </script>";
}
    
$connect->close();

?>
