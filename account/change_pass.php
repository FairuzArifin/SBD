<?php

    require_once "../includes/connect.php";

    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
    $check = "SELECT username from user where email = '$email'";

    $query = mysqli_query($connect, $check);
    $count = mysqli_num_rows($query);

    if (($_POST['password1']) != ($_POST['password2'])) {
        echo "<script>alert('Confirm Password Different');history.go(-1) </script>";    
    } else if ($count >= 1){
        $updatepass = "UPDATE user set password = '$password1' where email = '$email'";
        $updatequery = mysqli_query($connect, $updatepass);
        if($updatequery) {
            echo "<script>alert('Password Change, Please Sign In');history.go(-3) </script>";
        }
    } else {
        echo "<script>alert('Email not Registered');history.go(-1) </script>";
    }

?>