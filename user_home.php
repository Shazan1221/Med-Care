<?php

    require "database.php";
    $name=$email=$phone=$address="";

    session_start();
    if(!isset($_SESSION['name']))
    {
        header('location:login.php');
    }
?>

<head>
        <title>Home || Medcare</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <a href="login.php" class="btn btn-danger btn-xs" role="button">Logout</a>
            <h1>Welcome <?=$_SESSION['name'];?></h1>
            <a href="doc_info.php" class="btn btn-primary" role="button">Doctor Informations</a>
            <a href="donor_info.php" class="btn btn-danger" role="button">Blood Donor List</a>
            <a href="reg_bld_dnr.php" class="btn btn-info" role="button">Register as Blood Donor</a>
            <a href="user_profile.php" class="btn btn-success" role="button">Profile</a>
        </div>
    </body>