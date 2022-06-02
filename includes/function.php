<?php
//function show
include 'connect.php';
function show($sql2) {
    global $connect;
    $box = [];
    $result = mysqli_query($connect, $sql2);
    while($row = mysqli_fetch_assoc($result)) {
        $box[] = $row;
    }
    return $box;
}

function user_nft($nftid){
    global $connect;
    $box = array();
    $query = "SELECT * FROM kepemilikan
                JOIN user
                ON user.user_id = kepemilikan.user_id
                WHERE kepemilikan.nft_id = $nftid";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result)) {
        $box[] = $row;
    }
    return $box;
}
function show_bid($nftid){
    global $connect;
    $query = "SELECT bid_ongoing, name, bid_time from user
                INNER JOIN bid_ongoing
                ON bid_ongoing.user_id = user.user_id
                WHERE nft_id = $nftid;";

    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result)) {
        $box[] = $row;
    }
    return $box;


}

function get_latest_bid($nftid){
    global $connect;
    $q = "SELECT * FROM bid_ongoing where nft_id = $nftid order by bid_ongoing desc limit 1 ";
    $get = mysqli_query($connect, $q);
    $bid = $get->num_rows > 0 ? $bid = $get->fetch_array()['bid_ongoing']:0;
    return $bid;

}

function wallet($uid){
    global $connect;
    $query = "SELECT username, wallet.user_id, fund_eth
              FROM user
              INNER JOIN wallet
              ON wallet.user_id = user.user_id
              WHERE user.user_id =  $uid ";

          $result = mysqli_query($connect, $query);
          while($row = mysqli_fetch_assoc($result)) {
              $box[] = $row;
          }
          return $box;
}

function pindah($sid,$bid,$nft_id,$price){
    global $connect;

    $query = "UPDATE kepemilikan SET user_id = $bid WHERE nft_id = $nft_id";
    mysqli_query($connect, $query);

    $query1 = "SELECT fund_eth FROM wallet WHERE user_id = $sid";
    $query2 = "SELECT fund_eth FROM wallet WHERE user_id = $bid";
    $isi1 = mysqli_query($connect, $query1);
    $isi2 = mysqli_query($connect, $query2);
    $saldos = mysqli_fetch_assoc($isi1);
    $saldob = mysqli_fetch_assoc($isi2);

    $sakhir = $saldos['fund_eth'] + $price;
    $bakhir = $saldob['fund_eth'] - $price;

    $q1 = "UPDATE wallet SET fund_eth = $sakhir WHERE user_id = $sid";
    $q2 = "UPDATE wallet SET fund_eth = $bakhir WHERE user_id = $bid";
    mysqli_query($connect, $q1);
    mysqli_query($connect, $q2);

}

function cek_saldo($uid,$price){
    
    global $connect;
    $query = "SELECT * FROM wallet WHERE user_id = $uid";
    $isi = mysqli_query($connect, $query);
    $saldo = mysqli_fetch_assoc($isi);

    if($saldo>$price){
        return true;
    } else {
        return false;
    }

}