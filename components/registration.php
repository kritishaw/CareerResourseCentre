<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['signup_button'])){
        $user_email=$_REQUEST['user_email'];
        $user_name=$_REQUEST['user_name'];
        $user_username=$_REQUEST['user_username'];
        $user_password=$_REQUEST['user_password'];
		$user_ufid=$_REQUEST['user_ufid'];
        $sql="INSERT INTO user(user_name,user_email,user_username,user_password,user_ufid) VALUES('$user_name','$user_email','$user_username','$user_password','$user_ufid')";
        mysqli_query($database,$sql) or die(mysqli_error($database));
        $_SESSION['user_username'] = $user_username;
        header('Location: ../update-profile-after-registration.php?user_username='.$user_username);
    }
?>