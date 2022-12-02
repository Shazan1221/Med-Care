<?php

    require "database.php";
    $name=$field=$degree=$address="";

    session_start();
    if(!isset($_SESSION['adminname']))
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
            <a href="ad_logout.php" class="btn btn-danger btn-xs" role="button">Logout</a>
            <h1>Welcome <?php echo $_SESSION['adminname'];?></h1>

        <?php
        $user=$_SESSION['adminname'];
        $query=mysqli_query($conn,"select * from admin_login where name='$user'");
        $row=mysqli_fetch_array($query);
        //$id=$row['id'];
        if(isset($_REQUEST["submit"]))
        {
            $name=$_POST["name"];
            $field=$_POST["specialty"];
            $degree=$_POST["degree"];
            $address=$_POST["address"];
            $phone=$_POST["phone"];
    
            if(empty($name) || empty($field) || empty($degree) || empty($address) || empty($phone))
            {
                echo "Please insert all informations";
            }
            else
            {
                echo "Your Information Inserted successfully";
            }
    
            $query=mysqli_query($conn, "insert into doctor_info (name, specialty, degree, address, phone) values('$name','$field','$degree','$address', '$phone')");
        }
        ?>

        <div class="info">
        <form action="" method="POST">
        <br><h2>Please Insert Required Informations</h2>
        <br>Doctors Name<br>
        <input name="name" placeholder="Doctors Name" type="text">
        <br>Specialty <br>
        <input name="specialty" placeholder="specialty" type="text">
        <br>Degree <br>
        <input name="degree" placeholder="MBBS/FCPS" type="text">
        <br>Chamber Location<br>
        <input name="address" placeholder="" type="text">
        <br>Phone <br>
        <input name="phone" placeholder="+880" type="int">

        <br><br><input type="submit" name="submit" value="Send">
    </form>
    </div>
    </body>