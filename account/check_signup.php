<?php

    require_once '../includes/connect.php';
    
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
    $fund_eth = $_POST['fund_eth'];

    $check = "SELECT * FROM user WHERE email='$_POST[email]'";
    $process = mysqli_query($connect, $check);
	    
	if (empty($_POST['password1']) || empty($_POST['password2'])) {
        echo "<script>alert('Password Kosong.');history.go(-1) </script>";    
    } else if (($_POST['password1']) != ($_POST['password2'])) {
        header("location:signup.php?pesan=beda");    
    }
    
    if (mysqli_num_rows($process)>0) { 
        header("location:signup.php?pesan=ganda");
    } else { 
    	$sql1 = "INSERT INTO user (name,password,email,username) VALUES ('$name', '$password1', '$email', '$username)"; 
        $sql2 = "INSERT INTO wallet (fund_eth) VALUES ('$fund_eth')";         			                
        if($connect->query($sql1)===TRUE){
			if($connect->query($sql2)===TRUE){
                echo "<script>alert('Your Accout Registration Success');history.go(-1) </script>";
            } else {
                echo "Error : " .$sql2."<br/>".$connect->error;
            }
		} else {
			echo "Error : " .$sql1."<br/>".$connect->error;
		}
    }
    
    $connect->close();

?>