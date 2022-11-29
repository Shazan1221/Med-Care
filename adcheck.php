<?php
    
    require "database.php";
    if(isset( $_POST['name'])&& isset($_POST['password']))
    {
        session_start();

        $name = $_POST['name'];
        $password = $_POST['password'];

        $result = mysqli_query($conn,"SELECT * FROM admin_login WHERE name='$name' && password='$password'");
    
        $result = mysqli_fetch_array($result);
        
            
    }
    if($result)
            {
                $_SESSION['username'] = $name; 
                header('location: adhome.php');
            }
            else
            {
            header('location: admin.php');
            }
?>