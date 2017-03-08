<?php

include_once 'dbconnect.php';

echo '<h1>Our Guests</h1>';

// Locate and pull data from the HotelGuests Database
$sql = "SELECT id, firstname, lastname, roomsize, checkin FROM HotelGuests";
$hotelresult = $db -> query($sql);

if ($hotelresult -> num_rows > 0)	{
	
	while ($row = $hotelresult -> fetch_assoc())	{
		echo 'Guest ID: ' . $row['id'] . '<br>Name: ' . $row['firstname'] . ' ' . $row['lastname'] . '<br>Room Size: ' . $row['roomsize'] . '<br>Check In Type: ' . $row['checkin'] . '<br><br>'; 
	}
}else {
	echo 'No results to display.';

}

$db -> close();

echo '<hr> <a href="http://localhost:8888/notes-09-hotel/index.php">Go Home</a>';







?>
