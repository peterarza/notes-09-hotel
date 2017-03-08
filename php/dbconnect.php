<?php

$servername = getenv('127.0.0.1');
$username = 'hoteladmin';
$password = 'valencia';
$dbname = 'hotel';
$database = 'hotel';
$dbport = 8888;


$db = new mysqli($servername, $username, $password, $database, $dbport);

if ($db -> connect_error)	{
	die('DEBUG / Connection Failed: ' . $db -> connect_error);

}

	echo 'DEBUG / Connection Successful: ' . $db -> host_info;

/* Before we can start storing data, we need a table to hold the data first. The code below uses PHP and AQL to dynamically create our database table and table values. */

// Select the database that will store and retrieve data.
mysqli_select_db($db, $dbname);

// Create a table in the database and create the values that will be in that table.
if (empty($result))	{
	$sql = "CREATE TABLE HotelGuests	(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		roomsize VARCHAR(50),
		checkin VARCHAR(50)
		)";

	if ($db -> query($sql) === TRUE)	{
		echo '<br>DEBUG / Table Created Successfully. ';
	}else {
		echo '<br>DEBUG / Table Creation Failed. ' . $db -> error;
	};
}

















?>