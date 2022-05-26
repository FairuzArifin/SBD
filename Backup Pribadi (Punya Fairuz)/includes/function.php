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
