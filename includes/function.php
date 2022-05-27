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
                WHERE nft_id = 3101;";

    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_assoc($result)) {
        $box[] = $row;
    }
    return $box;


}

function status_nft($nft_id){
    global $connect;
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
        return true;
    } else {
        return false;
    }
}
