<!-- This page collect data from signup and store in "user_login" data table on medcare database-->

<?php
    require "database.php";
    session_start();
    header('location:login.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = "select * from user_login where email = '$email'";
    $result = mysqli_query($conn, $s);
    $result = mysqli_num_rows($result);

    if($num == 1){
        echo "This Email Already Used";
    }
    else{
        $reg = "insert into user_login(name, email, password) values('$name', '$email', '$password')";
        mysqli_query($conn, $reg);
        echo "Reistration Successful";
    }
?>