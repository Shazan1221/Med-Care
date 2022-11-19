<?php
	$server="localhost";
	$username="root";
	$password="";
	$db_name="medcare";

	$conn=mysqli_connect("$server","$username","$password","$db_name");

	if($conn==true)
	{
		echo "Connection Successful.<br>";
	}

	else
	{
		die("Connection failed.<br>".mysqli_connect_error());
	}
?>
