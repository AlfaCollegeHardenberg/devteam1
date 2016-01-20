<?php

	// This file can be included on every page thwer
	// a database connection is required

	$servername	 = "localhost";
	$username	 = "root";
	$password	 = "";
	$dbName		 = "loopjijalbij";

	$conn = new mysqli_connect($servername, $username, $password, $dbName);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>