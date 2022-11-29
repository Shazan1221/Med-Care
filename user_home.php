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
            <a class="float-right" href="login.php">Logout</a>
            <h1>Welcome <?php /*echo $_SESSION['name'];*/?></h1>
            <a href="doc_info.php" class="btn btn-info" role="button">Doctor Informations</a>
            <a href="#" class="btn btn-danger" role="button">Blood Donor List</a>
            <a href="user_update.php" class="btn btn-success" role="button">Update Informations</a>
        </div>
    </body>