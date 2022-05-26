<?php
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

function save_bid(){
    extract($_POST);
    $data = "";
    $chk = $this->db->query("SELECT * FROM bid_ongoing where nft_id = $nftid order by bid_amount desc limit 1 ");
    $uid = $chk->num_rows > 0 ? $chk->fetch_array()['user_id'] : 0 ;
    foreach($_POST as $k => $v){
        if(!in_array($k, array('bid_id')) && !is_numeric($k)){
            if(empty($data)){
                $data .= " $k='$v' ";
            }else{
                $data .= ", $k='$v' ";
            }
        }
    }
                $data .= ", user_id='{$_SESSION['user_id']}' ";

    if($uid == $_SESSION['user_id']){
        echo "<p>User id tidak sama</p>";
        exit;
    }
    if(empty($id)){
        $save = $this->db->query("INSERT INTO bid_ongoing set ".$data);
    }else{
        $save = $this->db->query("UPDATE bid_ongoing set ".$data." where id=".$id);
    }
    if($save)
        return 1;
    }