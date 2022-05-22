<?php

function data_bid($db){
    $query = "SELECT * FROM bid";
    $nft = mysqli_query($db, $query);
    $data_kategori = array();

    while ($row = mysqli_fetch_assoc($nft)) {
        $data_kategori[] = $row;
    }

    return $data_bid;
}