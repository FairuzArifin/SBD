<?php

    session_start();
    include '../includes/connect.php';
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $signin = mysqli_query($connect,"SELECT * FROM user WHERE email='$email' AND password='$password'");
    $sql = "SELECT * FROM user INNER JOIN wallet WHERE email = '{$email}' and password = '{$password}'";
    $check = mysqli_num_rows($signin);
    $query = mysqli_query($connect, $sql);
 
    if($check > 0){
	    $data = mysqli_fetch_assoc($signin);

        while ($row = mysqli_fetch_array($query)){
			$email = $row['email'];
            $name = $row['name'];
            $password = $row['password'];
            $wallet = $row['fund_eth'];
        }

	    if($query -> num_rows > 0){
		    $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['logged'] = true;
            $_SESSION['wallet'] = $wallet;
		    header("location:../item-details.php");
            $_SESSION['name'] = $name;
            $_SESSION['wallet_id'] = $wallet_id;
	    } else {
		    header("location:signin.php?pesan=error");
    	}	
    } else {
	    header("location:signin.php?pesan=error");
    }
 
?>