<?php
	/*
	This file provides the information for accessing the database sand coonnecting to MySQL. It also sets the language coding to utf-8
*/

	//First we define the constants:
	define('DB_USER', 'admin9997');
	define('DB_PASSWORD', 'WP6cV+~SqUU~w#Nzu9');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'simpleIDB');

	/*

	/*
	Next we assign the database connection to a variable that we will call $dbcon
	*/
	$dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MYSQL: ' . mysqli_connect_error());

	/*
	Finally, we set the language encoding as utf-8
	*/

	mysqli_set_charset($dbcon, 'utf8');
?>
