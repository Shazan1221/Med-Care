<?php

    require "database.php";
    $name=$bg=$sd=$district=$ld=$email=$number="";

    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:user_home.php');
    }

    
    $pid = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM `donor_info` WHERE `id` = '$pid'");
    header('Location: user_profile.php');
    
?>
   
