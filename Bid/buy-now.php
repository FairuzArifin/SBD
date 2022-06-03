<?php
include '../includes/connect.php';
include '../includes/function.php';

if (empty($_SESSION['logged'])){
    header ("location: ../account/signin.php");
    exit();

}
$user_id = $_SESSION['user_id'];
$nft_id = $_POST['nft_id'];

$cekseller = "SELECT *
            FROM kepemilikan
            WHERE nft_id = $nft_id";
$out = mysqli_query($connect, $cekseller);
$seller_id = mysqli_fetch_assoc($out);
$sid = $seller_id['user_id'];

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
$buy_price =$time['buy_now'];

if(strtotime($start) < strtotime($now)){
    echo "<script>alert('Lelang Belum Dimulai');history.go(-1) </script>";}
elseif(strtotime($now) > strtotime($end)){
echo "<script>alert('NFT Already Sold');history.go(-1) </script>";}
else{
    if($user_id != $sid){
        if(cek_saldo($user_id,$buy_price)==true){
            $sql = "UPDATE `nft` SET `status_nft` = '1' WHERE `nft`.`nft_id` = $nft_id";
            if($connect->query($sql)===TRUE){
            pindah($sid,$user_id,$nft_id,$buy_price);
            delete_bid($nft_id);
            echo "<script>alert('Buy Now Success');history.go(-1) </script>";
            }
        }
        else{
            echo "<script>alert('Saldo Kurang');history.go(-1) </script>";
        }
    }else{
        echo "<script>alert('Punya sendiri');history.go(-1) </script>";
    }
    } 

?>