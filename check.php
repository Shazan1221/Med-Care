<?php
    
    require "database.php";
    if(isset( $_POST['email'])&& isset($_POST['password']))
    {
        session_start();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conn,"SELECT * FROM user_login WHERE email='$email' && password='$password'");
    
        $result = mysqli_fetch_array($result);
        
            
    }
    if($result)
            {
                
                header('location:index.php');
            }
            else
            {
            header('location:Login.php');
            }
?>