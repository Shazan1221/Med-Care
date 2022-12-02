<?php
    
    require "database.php";
    if(isset($_POST['email'])&& isset($_POST['password']))
    {
        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn,"SELECT * FROM user_login WHERE email='$email' && password='$password'");
    
        $result = mysqli_fetch_array($result);        
    }
    
    if($result)
            {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $result['name'];
                header('location: user_home.php');
            }
            else
            {
            header('location: login.php');
            }
?>