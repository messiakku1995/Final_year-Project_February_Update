<!-- This file is intented to create a connection to the database-->

<?php

	$mysql_hostname = "localhost"; // this variables defines the hostname, where the site is hosted on the server.
	$mysql_user ="root";	//Define the username to login into the database.
	$mysql_password ="";	//Define the user password here.
	$mysql_database ="myshop";  	//define the databse name here.
	
	// mysql_connect function establises a connection of th server with the database.
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("oops !Could not connect database");
	mysql_select_db($mysql_database, $bd) or die("opps! database not connected");

?>
