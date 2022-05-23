<?php
include 'connect.php';

function data_bid($bid){
    $query = "SELECT * FROM nft WHERE nft_id = $bid";

    $h = mysqli_query($connect, $query);
        $nft = array();

    // ... tiap baris dari hasil query dikumpulkan ke $nft
        while ($row = mysqli_fetch_assoc($h)) {
        $nft[] = $row;
    }
    // ... lanjut di tampilan
    return $nft;
}