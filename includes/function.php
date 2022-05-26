<?php
    include 'connect.php';
    //function show
    function show($query) {
        global $connect;
        $box = [];
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $box[] = $row;
        }
        return $box;
    }

    //Register
    function regist($data) {
        global $connect;
        $name = strtolower(stripslashes($data['name']));
        $username = stripslashes($data['username']);
        $email = stripslashes($data['email']);
        $pass = mysqli_real_escape_string($connect, $data["password"]);
        $pass2 = mysqli_real_escape_string($connect, $data["password_confirmation"]);
        $fund_eth = stripslashes($data['fund_eth']);
    
        //passwordconfirmation
    if ($pass !== $pass2) {
        return false;
    }

    //Paswword Hasing
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    //insert data ke table user
    $daftar = mysqli_query($connect, "INSERT INTO user(username, email, password, name, about, date_of_birth, age, country, address) VALUES('$username', '$email', '$pass', '$name', '', '', 0, '', '')");
    $daftar2 = mysqli_query($connect, "INSERT INTO wallet(fund_eth) VALUES ('$fund_eth')");

    return mysqli_affected_rows($connect) ;
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