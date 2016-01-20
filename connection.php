<?php

	// This file can be included on every page thwer
	// a database connection is required

	// old = localhost & empty password

	$servername	 = "https://mysql22469-devteam1.groundctrl.nl";
	$username	 = "root";
	$password	 = "IDAxli17288";
	$dbName		 = "loopjijalbij";

	$dbCon = mysqli_connect($servername, $username, $password, $dbName);

	// Check connection
	if ($dbCon->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
?>



