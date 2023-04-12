<?php
	require 'config.php';
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$des = $_POST["concern"];
	

	//Database connection

	$sql = "INSERT Into contact values ('$name','$email','$subject','$concern')";
	$result = mysqli_query($connection,$sql) or die("Query Failed");

	$connection->close();


?>	
