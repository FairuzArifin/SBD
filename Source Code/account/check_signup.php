<?php

    require_once '../includes/connect.php';
    
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

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
    	$sql = "INSERT INTO akun (name,password,email) VALUES ('$name', '$password1', $email')";          			                
        if($koneksi->query($sql)===TRUE){
			echo "<h1 style='margin-top:30px; color:green; text-align:center;'>Sign Up Success</h1>";
		} else {
			echo "Error : " .$sql."<br/>".$koneksi->error;
		}
    }
    
    $koneksi->close();

?>