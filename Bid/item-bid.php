<?php
include '../includes/connect.php';

$bid =$_POST['bid_amount'];
$user_id = 2101;
$nft_id = 3101;
$check = "SELECT MAX(bid_ongoing) AS max FROM bid_ongoing WHERE nft_id = $nft_id";
$date = 'SELECT auction_end AS time FROM bid';
$process = mysqli_query($connect, $check);
$process2 = mysqli_query($connect, $date);
$row = mysqli_fetch_array($process);
$row2 = mysqli_fetch_array($process2);
$largestbid = $row['max'];
$datee = $row['time'];
if($datee > date("Y-m-d")){
    if($bid > $largestbid ){
        $sql = "INSERT INTO bid_ongoing (user_id,nft_id,bid_ongoing) VALUES ('$user_id', '$nft_id', '$bid')";          			                
            if($connect->query($sql)===TRUE){
                echo "<script>alert('Bidding Success');history.go(-1) </script>";
            } else {
                echo "Error : " .$sql."<br/>".$connect->error;
            }
            } else {
                echo "<script>alert('Bid Amount Must be Higher');history.go(-1) </script>";
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
