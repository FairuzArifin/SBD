<?php
    include '../includes/connect.php';
    $query = "SELECT * FROM nft
                FULL OUTER JOIN table2
                ON bid.nft_id = nft.nft_id
                WHERE nft_id = $nftid
                ";

    $h = mysqli_query($connect, $query);
        $nft = array();

    // ... tiap baris dari hasil query dikumpulkan ke $nft
        while ($row = mysqli_fetch_assoc($h)) {
        $nft[] = $row;
    }

?>