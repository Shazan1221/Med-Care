<?php

    require "database.php";
    $name=$bg=$sd=$district=$ld=$email=$number="";

    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:user_home.php');
    }
    
    $u_email = $_SESSION['email'];
?>
<head>
        <title>User Profile Update</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <a href="user_home.php" class="btn btn-success btn-xs" role="button">Back To Home</a>
    
    <?php
        $user=$_SESSION['username'];
        $query=mysqli_query($conn,"select * from user_login where email='$u_email'");
        $row=mysqli_fetch_array($query);
        $id=$row['id'];
    ?>
        <?php
        $user=$_SESSION['username'];
        $query1=mysqli_query($conn,"select * from user_login where email='$u_email'");
        $row1=mysqli_fetch_array($query1);
        $id=$row1['id'];
        $query=mysqli_query($conn, "select * from donor_info where user_id=$id");
        $rowcount=mysqli_num_rows($query);
    ?>

    <table border="1">

        <tr>
            <th>Full Name</th>
            <th>Blood Group</th>
            <th>Sub District</th>
            <th>District</th>
            <th>Last Blood Donation</th>
            <th>Email</th>
            <th>Number</th>
            <th>Actions</th>
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
                <td><a class="btn btn-success" href="edit.php?id=<?=$row['id']?>">Edit</a> <a class="btn btn-danger" href="delete.php?id=<?=$row['id']?>">Delete</a> </td>
            </tr>
        <?php
            }
        ?>
</body>