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
        <title>Blood Donor Registration</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

        <?php
        $user=$_SESSION['username'];
        $query=mysqli_query($conn,"select * from user_login where email='$u_email'");
        $row=mysqli_fetch_array($query);
        $id=$row['id'];
        if(isset($_REQUEST["submit"]))
        {
            $name=$_POST["name"];
            $bg=$_POST["blood_group"];
            $sd=$_POST["sub_district"];
            $district=$_POST["district"];
            $ld=$_POST["last_donation"];
            $email=$_POST["email"];
            $number=$_POST["number"];
    
            if(empty($name) || empty($bg) || empty($sd) || empty($district) || empty($ld) || empty($email) || empty($number))
            {
                echo "Please insert all informations";
            }
            else
            {
                $query=mysqli_query($conn, "insert into donor_info (name, blood_group, sub_district, district, last_donation, email, number, user_id) values('$name','$bg', '$sd', '$district', '$ld', '$email', '$number', '$id')");

                if($query){
                    echo "Your Information Inserted successfully";
                }else{
                    echo "Something went wrong!";
                } 
            } 
        }
        ?>

    <div class="info">
        <form action="" method="POST">
        <h2>Welcome <?=$_SESSION['name'];?></h2>
        <br><h2>Please Insert Required Informations</h2>
        <br>Full Name <br>
        <input name="name" placeholder="Your Name" type="text" required>
        <br>Blood Group <br>
        <input name="blood_group" placeholder="O+/O-/A+/A-/B+/B-/AB+/AB-" type="text" required>
        <br>Sub District <br>
        <input name="sub_district" placeholder="City Corporation / Thana" type="text" required>
        <br>District <br>
        <input name="district" placeholder="District Name" type="text" required>
        <br>Last Blood Donation <br>
        <input name="last_donation" placeholder="dd/mm/yyyy" type="text" required>
        <br>Email <br>
        <input name="email" placeholder="abc@gmail.com" type="text" required>
        <br>Number <br>
        <input name="number" placeholder="+880" type="int" required>
        <br>

        <br><input type="submit" name="submit" value="Send">
        </form>
    </div>

    </body>