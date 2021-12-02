<?php

	$servername = "localhost";

	$username = "root";
	$pasword = "";

	$database = "daraz";

	$conn = new mysqli($servername, $username, $pasword, $database);

	if($conn->connect_error){

		die("error connecting to DB server " . $conn->connect_error);
	}
	else{
		//echo " ignore successfull connect <br>";
	}


?>