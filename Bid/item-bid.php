<?php
include '../includes/connect.php';

$bid =$_POST['bid_amount'];
$user_id = 2101;
$nft_id = 3101;
$check = "SELECT MAX(bid_ongoing) AS max FROM bid_ongoing WHERE nft_id = $nft_id";
$time = "SELECT auction_end AS minn FROM bid WHERE nft_id = $nft_id"; //2
$process = mysqli_query($connect, $check);
$proces = mysqli_query($connect, $time); //2
$row = mysqli_fetch_array($process);
$row2 = mysqli_fetch_assoc($proces); //2
$www = $row2['minn'];
$largestbid = $row['max'];
$now = strotime(Now);
if($row2 > $now){
    if($bid > $largestbid ){
        $sql = "INSERT INTO bid_ongoing (user_id,nft_id,bid_ongoing) VALUES ('$user_id', '$nft_id', '$bid')";          			                
        if($connect->query($sql)===TRUE){
            echo "<script>alert('Bidding Success');history.go(-1) </script>";
        } else {
            echo "Error : " .$sql."<br/>".$connect->error;
        }
    } else {
        echo "<script>alert('$now');history.go(-1) </script>";
    } 
} else {
        $status = "SELECT nft_id FROM nft WHERE nft_id = $nft_id";
        $process3 = mysqli_query($connect, $status);
        $row3 = mysqli_fetch_array($process3);
        $sql = "INSERT INTO nft_id (nft_id) VALUES ('1')";          			                
            if($connect->query($sql)===TRUE){
                echo "<script>alert('NFT Already Sold');history.go(-1) </script>";
            }
}
    
$connect->close();

?>
