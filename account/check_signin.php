<?php

    session_start();
    include '../includes/connect.php';
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $box = [];
    $signin = mysqli_query($connect,"SELECT * FROM user WHERE email='$email' AND password='$password'");
    $sql = "SELECT * FROM user INNER JOIN wallet WHERE email='$email' and user.user_id = wallet.user_id";
    $check = mysqli_num_rows($signin);
    $query = mysqli_query($connect, $sql);
 
    if($check > 0){
	    $data = mysqli_fetch_assoc($signin);

        while ($row = mysqli_fetch_array($query)){
            $user_id = $row['user_id'];
			$email = $row['email'];
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];
            $wallet = $row['fund_eth'];
        }

	    if($query -> num_rows > 0){
            $_SESSION['user_id'] = $user_id;
		    $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['username'] = $username;
            $_SESSION['logged'] = true;
            $_SESSION['wallet'] = $wallet;
		    header("location:../upload/author.php");
            
	    } else {
		    header("location:signin.php?pesan=error");
    	}	
    } else {
	    header("location:signin.php?pesan=error");
    }
 
?>