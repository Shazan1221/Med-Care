<?php

    require "database.php";
    $name=$email=$phone=$address="";

    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:user_home.php');
    }
?>

<head>
        <title>Doctors Informations</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>All doctors information are given below</h1>

        <?php
        $user=$_SESSION['username'];
        $query=mysqli_query($conn,"select * from user_login where name='$name'");
        $row=mysqli_fetch_array($query);
        ?>

    <?php
        $user=$_SESSION['username'];
        $query1=mysqli_query($conn,"select * from admin_login where name='$user'");
        $row1=mysqli_fetch_array($query1);
        $query=mysqli_query($conn, "select * from doctor_info");
        $rowcount=mysqli_num_rows($query);
    ?>

    <table border="1">

        <tr>
            <th>Doctors Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php
            for($i=1; $i<=$rowcount; $i++)
            {
                $row=mysqli_fetch_array($query);
            
        ?> 
            <tr>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["address"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["phone"];?></td>
            </tr>
        <?php
            }
        ?>
    </body>