<?php 

    include "../includes/connect.php";
    include "include/header.php";

    if(isset($_POST['submit'])){
        $userid = $_SESSION['user_id'];
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
                    $sql = "INSERT INTO nft SET photo='$file_name',
                    title = '$_POST[title]',
                    description = '$_POST[description]',
                    category = '$_POST[category]'";

                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $category = $_POST['category'];

                    $start_bid_price= 0;
                    $auction_start = 0;
                    $auction_end = date("Y-m-d h:i:sa");
                    $buy_now = date("Y-m-d h:i:sa");
                    $status_nft = 1;
                    $sql = "INSERT INTO nft (photo, title, description, category, status_nft)
                    VALUES ('$file_name', '$title', '$description', '$category','$status_nft')";

                    

                    if($connect->query($sql)===TRUE){

                        $sql ="SELECT MAX(nft_id) AS last_id FROM nft LIMIT 1";
                        $q = mysqli_query($connect,$sql);
                        $data = mysqli_fetch_array($q);
                        $last_id = $data['last_id'];
                        
                        $sql2 = "INSERT INTO bid (nft_id,start_bid_price, auction_start, auction_end, buy_now)
                        VALUES ('$last_id','$start_bid_price', '$auction_start', '$auction_end', '$buy_now')";

                        $sql3 = "INSERT INTO kepemilikan (user_id,nft_id)
                        VALUES ('$userid','$last_id')";

                        if($connect->query($sql2)===TRUE){
                            mysqli_query($connect,$sql3);
                            echo 'Berhasil';
                        } else{
                            echo "Error : " .$sql2."<br/>".$connect->error;
                        }
                    } else {
                        echo "Error : " .$sql."<br/>".$connect->error;
                    }
                }
            }                                                                       
           }
           echo '<section class="profile-section light-version padding-top padding-bottom">
           <center>
           <h3>NFT UPLOADED</h3> <br>
           <a href="author.php"><h3>Back</h3></a>
           </center>
           </section>'; 
    }
    include "../includes/footer.php";
?>
