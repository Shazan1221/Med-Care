<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Med Care</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <header class="item1">
        <a href=index.php><img src="images/MicrosoftTeams-image.png" width="100px" height="100px" alt="Logo for Med Care"></a>
    </header>

    <main class="item3">
        <form action="profile.php" method="post">

            Login/Signup<br><br>
           
            Name<br>
            <input name="Fname" placeholder="Name" type="text" size="30" style="height: 25px;" value="<?php echo (isset($Fname)) ? $Fname : ""  ?>">
            <span style="color:red"><?php echo (isset($errorFname)) ? $errorFname : ""; ?></span><br>
            <br>

            Password <br>
            <input name="password" placeholder="Enter Password" type="password" size="30" style="height: 25px;" value="<?php echo (isset($password)) ? $password : ""  ?>">
            <span style="color:red"><?php echo (isset($errorpassword)) ? $errorpassword : ""; ?></span><br>
            <br><br>

            <input type="submit" name="submit" value="Send">

        </form>

    </main>

    <footer class="item5">
        <p>Made by "Ahmmed Shahriar Shazan - 201311010 <br> Md. Arnob Mustakim - 201311015 <br> Shreyasee Chakraborty - 201311018 <br>- 9th Semester - 23rd Batch"</p>
    </footer>
</body>