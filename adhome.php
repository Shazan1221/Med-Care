<?php

    require "database.php";
    $name=$email=$phone=$address="";

    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:admin.php');
    }
?>

<head>
        <title>Data Insert Form</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <a class="float-right" href="ad_logout.php">Logout</a>
            <h1>Welcome <?php echo $_SESSION['username'];?></h1>

        <?php
        $user=$_SESSION['username'];
        $query=mysqli_query($conn,"select * from admin_login where name='$user'");
        $row=mysqli_fetch_array($query);
        //$id=$row['id'];
        if(isset($_REQUEST["submit"]))
        {
            $name=$_POST["name"];
            $address=$_POST["address"];
            $email=$_POST["email"];
            $phone=$_POST["phone"];
    
            if(empty($name) || empty($address) || empty($email) || empty($phone))
            {
                echo "Please insert all informations";
            }
            else
            {
                echo "Your Information Inserted successfully";
            }
    
            $query=mysqli_query($conn, "insert into doctor_info (name, address, email, phone) values('$name','$address','$email', '$phone')");
        }
        ?>

        <div class="info">
        <form action="" method="POST">
        <br><h2>Please Insert Required Informations</h2>
        <br>Name<br>
        <input name="name" placeholder="Doctors Name" type="text">
        <br>Address <br>
        <input name="address" placeholder="Address" type="text">
        <br>Email <br>
        <input name="email" placeholder="abcd@gmail.com" type="text">
        <br>Phone <br>
        <input name="phone" placeholder="+880" type="int">

        <br><br><input type="submit" name="submit" value="Send">
    </form>
    </div>
    </body>