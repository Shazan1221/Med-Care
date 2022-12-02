<?php

    require "database.php";
    $name=$bg=$sd=$district=$ld=$email=$number="";

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
            <h1>All donors information are given below</h1>

        <?php
        $user=$_SESSION['username'];
        $query=mysqli_query($conn,"select * from user_login where name='$name'");
        $row=mysqli_fetch_array($query);
        ?>

    <?php
        $user=$_SESSION['username'];
        $query1=mysqli_query($conn,"select * from user_login where name='$user'");
        $row1=mysqli_fetch_array($query1);
        $query=mysqli_query($conn, "select * from donor_info");
        $rowcount=mysqli_num_rows($query);
    ?>

    <table border="1">

        <tr>
            <th>Name</th>
            <th>Blood Group	</th>
            <th>Sub District</th>
            <th>District</th>
            <th>Last Blood Donation</th>
            <th>Email</th>
            <th>Number</th>
        </tr>

        <?php
            for($i=1; $i<=$rowcount; $i++)
            {
                $row=mysqli_fetch_array($query);
            
        ?> 
            <tr>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["blood_group"];?></td>
                <td><?php echo $row["sub_district"];?></td>
                <td><?php echo $row["district"];?></td>
                <td><?php echo $row["last_donation"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["number"];?></td>
            </tr>
        <?php
            }
        ?>
    </body>