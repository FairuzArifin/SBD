
<?php
include '../includes/connect.php';


$bid =$_POST['bid_amount'];
$user_id = 2101;
$nft_id = 3101;
$check = "SELECT MAX(bid_ongoing) as max from bid_ongoing WHERE nft_id = $nft_id";
$process = mysqli_query($connect, $check);
$row = mysqli_fetch_array($process);
$largestbid = $row['max'];
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
    
$connect->close();

?>
