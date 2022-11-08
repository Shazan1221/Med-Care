<?php

session_start();
require "dbconnector.php";

    $Fname="";
    $password="";

    

if (isset($_POST["submit"])) {
    
    $Fname=$_POST["Fname"];
    $password=$_POST["password"];
    $_SESSION["Fname"] = $Fname;
    $_SESSION["password"] = $password;
    $errorFname = "";
    $errorpassword = "";

    

    if ($Fname == "") {
        $errorFname = "* Name field must be filled.";
    }

    if (empty($password)) {
        $errorpassword = "* Password field must be filled.";
    }


    if ($errorFname != "" || $errorpassword != "") {
        echo "Some inputs are ivalid.";
    }

}

if (isset($_POST["update"])){

    $Fname= $_SESSION["Fname"];
    $password= $_SESSION["password"];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["phone"];
    $address = $_POST["address"];
    $group = $_POST["group"];
    $rh = $_POST["rh"];


    $errorName = "";
    $errorEmail = "";
    $errorMobile = "";
    $errorAddress ="";


    if ($name == "") {
        $errorName = "* Name field must be filled.";
    }

    if (empty($email)) {
        $errorEmail = "* Email field must be filled.";
    }

    if ($mobile == "") {
        $errorMobile = "* Mobile number must be provided.";
    }

    if ($address == "") {
        $errorAddress = "* Address must be provided.";
    }

    if ($errorName != "" || $errorEmail != "" || $errorMobile != "" || $errorAddress != "") {
        echo "Some inputs are ivalid.";
    } 
    
    else {
        $query = mysqli_query($conn,"insert into bloodinfo (FName,Password,Name,Email,Phone,Address,BloodGroup,BloodRhFactor) values('$Fname','$password','$name','$email','$mobile','$address','$group','$rh')");
    }
}


?>

<head>
    <title>Med Care</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <header class="item1">
        <a href=index.php><img src="images/MicrosoftTeams-image.png" width="100px" height="100px" alt="Logo for Med Care"></a>
    </header>

    <main class="item3">
        <form action="" method="post">

            Name<br>
            <input name="name" placeholder="Name" type="text" value="<?php echo (isset($name)) ? $name : ""?>" size="30" style="height: 25px;" >
            <span style="color:red"><?php echo (isset($errorName)) ? $errorName : ""; ?></span><br>

            E-Mail <br>
            <input name="email" placeholder="E-Mail Address" type="text" value="<?php echo (isset($email)) ? $email : ""  ?>" size="30" style="height: 25px;" >
            <span style="color:red"><?php echo (isset($errorEmail)) ? $errorEmail : ""; ?></span><br>


            Phone <br>
            <input name="phone" placeholder="01711..." type="text" value="<?php echo (isset($mobile)) ? $mobile : ""  ?>" size="30" style="height: 25px;" >
            <span style="color:red"><?php echo (isset($errorMobile)) ? $errorMobile : ""; ?></span>
            <br>


            Address <br>
            <textarea name="address" value="<?php echo (isset($address)) ? $address : ""  ?>" style="height: 50px; width:230px; border-radius: 5px" > </textarea><br>
            <span style="color:red"><?php echo (isset($errorAddress)) ? $errorAddress : ""; ?></span>
            <br>


            Blood Group <br>
            <select name="group" id="Group"  value="<?php echo (isset($group)) ? $group : ""  ?>" style="height: 30px; width:230px; border-radius: 5px">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select><br>

            Blood Rh Factor <br>
            <select name="rh" id="Rh" value="<?php echo (isset($rh)) ? $rh : ""  ?>" style="height: 30px; width:230px; border-radius: 5px" >
                <option value="+">+</option>
                <option value="-">-</option>
            </select><br>


            <input type="submit" name="update" value="Submit">

        </form>
    </main>

    <footer class="item5">
    <p>Made by "Ahmmed Shahriar Shazan - 201311010 <br> Md. Arnob Mustakim - 201311015 <br> Shreyasee Chakraborty - 201311018 <br>- 9th Semester - 23rd Batch"</p>
    
    </footer>

<table border="1" style="border-color: white ; margin-left: auto; margin-right:auto;" >
   <br><tr style="color: white;">
       <th>Name</th>
       <th>Email</th>
       <th>Mobile</th>
       <th>Address</th>
       <th>Blood Group</th>
       <th>Rh Factor</th>
   </tr>

   <?php
    $Fname= $_SESSION["Fname"];
    $password= $_SESSION["password"];
     $query=mysqli_query($conn,"select * from bloodinfo where FName='$Fname' and Password='$password'");

     while ( $row=mysqli_fetch_array($query)) {

      ?> <tr style="color: white;">
           <td><?php echo $row["Name"];?></td>
           <td><?php echo $row["Email"];?></td>
           <td><?php echo $row["Phone"];?></td>
           <td><?php echo $row["Address"];?></td>
           <td><?php echo $row["BloodGroup"];?></td>
           <td><?php echo $row["BloodRhFactor"];?></td>
        </tr>

    <?php

     }

   ?>

   

</table>
</body>