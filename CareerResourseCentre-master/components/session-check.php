<?php
    require '_database/database.php';
    if(!isset($_SESSION['user_username'])){
        header("location:login.php?session=notset");
    }
?>