<?php
include '../includes/connect.php';

$bid =$_POST['bid_amount'];
$user_id = 2101;
<<<<<<< HEAD
$nft_id = 9;

$check = "SELECT MAX(bid_ongoing) AS max FROM bid_ongoing WHERE nft_id = $nft_id";  //check higher bid
$process = mysqli_query($connect, $check);
$proces = mysqli_query($connect, $time); //2
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
$largestbid = $row['max'];
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
=======
$nft_id = 3101;
$check = "SELECT MAX(bid_ongoing) AS max FROM bid_ongoing WHERE nft_id = $nft_id";
$time = "SELECT auction_end AS minn FROM bid WHERE nft_id = $nft_id"; //2
$process = mysqli_query($connect, $check);
$proces = mysqli_query($connect, $time); //2
$row = mysqli_fetch_array($process);
$row2 = mysqli_fetch_assoc($proces); //2
$www = $row2['minn'];
$largestbid = $row['max'];
$now = date("Y-m-d h:i:sa");
if(strtotime($www) > strtotime($now)){
    if($bid > $largestbid ){
        $sql = "INSERT INTO bid_ongoing (user_id,nft_id,bid_ongoing) VALUES ('$user_id', '$nft_id', '$bid')";          			                
        if($connect->query($sql)===TRUE){
            echo "<script>alert('Bidding Success');history.go(-1) </script>";
>>>>>>> parent of 38e9bec (Ubah Wallet jadi User)
        } else {
                $sql = "UPDATE `nft` SET `status_nft` = '1' WHERE `nft`.`nft_id` = $nft_id";
                    if($connect->query($sql)===TRUE){
                        echo "<script>alert('NFT Already Sold');history.go(-1) </script>";
                    } else {
                        echo "Gagal";
                    }
        }
    } else {
<<<<<<< HEAD
        echo "<script>alert('Bid Amount Higher than Buy Now Amount');history.go(-1) </script>";
    }
}else{
    echo "<script>alert('You Are the Owner -_-');history.go(-1) </script>";
=======
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
>>>>>>> parent of 38e9bec (Ubah Wallet jadi User)
}

$connect->close();

?>
