<?php

    require "database.php";
    $name=$bg=$sd=$district=$ld=$email=$number="";

    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:user_home.php');
    }

    
    $pid = $_GET['id'];
?>

<head>
        <title>Update Profile</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

        <?php
        $user=$_SESSION['username'];
        $query=mysqli_query($conn,"select * from donor_info where id='$pid'");
        $row=mysqli_fetch_array($query);
        $id=$row['id'];
        //$name=$row['name'];
        //$blood_group=$row['blood_group'];
        $sub_district=$row['sub_district'];
        $district=$row['district'];
        $last_donation=$row['last_donation'];
        $email=$row['email'];
        $number=$row['number'];

        if(isset($_REQUEST["submit"]))
        {
            //$pname=$_POST["name"];
            //$bg=$_POST["blood_group"];
            $sd=$_POST["sub_district"];
            $districtp=$_POST["district"];
            $ld=$_POST["last_donation"];
            $emailp=$_POST["email"];
            $numberp=$_POST["number"];
    
            if(/*empty($name) || empty($bg) ||*/ empty($sd) || empty($district) || empty($ld) || empty($email) || empty($number))
            {
                echo "Please insert all informations";
            }
            else
            {
                $query=mysqli_query($conn,"UPDATE `donor_info` SET /*`name`='$pname',`blood_group`='$bg',*/`sub_district`='$sd',`district`='$districtp',`last_donation`='$ld',`email`='$emailp',`number`='$numberp' WHERE `id`='$pid'");

                if($query)
                {
                    header('location:user_profile.php');
                }
                else
                {
                    echo "Something went wrong!";
                }   
            }    
        }
        ?>

    <div class="info">
        <form action="" method="POST">
            <input type="hidden" name="pid" value="<?=$pid;?>">
            <h2>Welcome <?=$_SESSION['name'];?></h2>
        <br><h2>Please Insert Required Informations</h2>

        <br>Sub District <br>
        <input value="<?=$sub_district?>" name="sub_district" placeholder="City Corporation / Thana" type="text">
        <br>District <br>
        <input value="<?=$district?>" name="district" placeholder="District Name" type="text">
        <br>Last Blood Donation <br>
        <input value="<?=$last_donation?>" name="last_donation" placeholder="dd/mm/yyyy" type="text">
        <br>Email <br>
        <input value="<?=$email?>" name="email" placeholder="abc@gmail.com" type="text">
        <br>Number <br>
        <input value="<?=$number?>" name="number" placeholder="+880" type="int">
        <br>

        <br><input type="submit" name="submit" value="Send">
        </form>
    </div>

    
   
</body>