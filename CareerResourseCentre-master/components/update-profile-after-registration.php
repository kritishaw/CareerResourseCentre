<?php
    session_start();
    $temp=$_SESSION['user_username'];
	
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        session_start();
        
        $user_name=$_REQUEST['user_name'];
        $user_ufid=$_REQUEST['user_ufid'];
        $user_email=$_REQUEST['user_email'];
		
        $sql3="UPDATE user SET user_name='$user_name',user_ufid='$user_ufid',user_email='$user_email' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        $sql4="INSERT INTO user (user_name,user_ufid,user_email) VALUES ('$user_name','$user_ufid','$user_email') WHERE user_username = $temp";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }  
    }    
?>