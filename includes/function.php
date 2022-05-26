<?php
    include 'connect.php';
    //function show
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