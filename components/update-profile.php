<?php
    ini_set("display_errors",1);
    session_start();
    $temp=$_SESSION['user_username'];
    if(isset($_POST)){
        require '../_database/database.php';
		
        $user_name=$_REQUEST['user_name'];
        $user_email=$_REQUEST['user_email'];
		$user_currentaddress=$_REQUEST['user_currentaddress'];
        $user_currentcountry=$_REQUEST['user_currentcountry'];
		$user_veteran=$_REQUEST['user_veteran'];
		$user_gender=$_REQUEST['user_gender'];
		$user_ufid=$_REQUEST['user_ufid'];
		$user_phno=$_REQUEST['user_phno'];
		$user_permanentaddress=$_REQUEST['user_permanentaddress'];
		$user_permanentcountry=$_REQUEST['user_permanentcountry'];
		$user_disability=$_REQUEST['user_disability'];
		$user_visa=$_REQUEST['user_visa'];
		
        $sql3="UPDATE user SET user_name='$user_name',user_currentaddress='$user_currentaddress',user_currentcountry='$user_currentcountry',
		user_veteran='$user_veteran',user_ufid='$user_ufid',user_phno='$user_phno',user_permanentaddress='$user_permanentaddress',user_gender='$user_gender',
		user_permanentcountry='$user_permanentcountry',user_disability='$user_disability',user_visa='$user_visa',p1=1 where user_username='$temp'";
        mysqli_query($database,$sql3)or die(mysqli_error($database));
		header("location:../edit-profile.php?user_username=$temp&request=profile-update&status=success");
    }    
?>