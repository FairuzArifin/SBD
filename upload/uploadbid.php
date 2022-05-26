<?php 

    include "connection.php";


    if(isset($_POST['submit'])){
        $dir = "nftimage/";
        $file_name = ($_FILES['file']['name']);
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_size = $_FILES['file']['size'];
        $upload_file = $_FILES['file']['tmp_name'];
        if($file_name=='') {
            echo 'Please choose a file';
        }
        else {
            if($file_type!='jpg' && $file_type!='png' && $file_type!='jpeg' && $file_type!='svg' && $file_type!='webp' && $file_type!='mp3' && $file_type!='mp4'){
                echo 'Please choose a file with valid type';
            }
            else {
                if($file_size > 1500000000) {
                    echo 'Maximum file size is 150 Mb';
                }
                else {
                    move_uploaded_file($upload_file, $dir.'/'.$file_name);
               
                    $query1 = mysqli_query($con, "INSERT INTO nft SET photo='$file_name',
                    title = '$_POST[title]',
                    description = '$_POST[description]',
                    category = '$_POST[category]'");
                    $query2 = mysqli_query($con, "INSERT INTO bid SET start_bid_price='$_POST[bidprice]',
                    auction_start = '$_POST[auction_start]',
                    auction_end = '$_POST[auction_end],'");
                }
            }                                                                       
           }
    }
?>