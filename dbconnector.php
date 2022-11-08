<?php
$server="localhost";
$username="root";
$password="";
$db_name="bloodbank";

$conn=mysqli_connect("$server","$username","$password","$db_name");

if($conn==true)
{
	echo "";
}

else
{
	die("Connection failed.".mysqli_connect_error());
}
?>