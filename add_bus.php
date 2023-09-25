<?php
include "include.php";

$ins="INSERT INTO `bus`(`Name`,`Type`,`Origin`,`Destination`,`Seats`,`Arrival_time`,`Departure_time`,`Date`,`Fare`)VALUES('".$_POST['Name']."','".$_POST['Type']."','".$_POST['Origin']."','".$_POST['Destination']."','".$_POST['Seats']."','".$_POST['Arrival_time']."','".$_POST['Departure_time']."','".$_POST['Date']."','".$_POST['Fare']."')";

mysql_query($ins) or die(mysql_error());


session_start();
	
	{

	$_SESSION['updt'] = 'Added succesfully..';
	header('location: admin_home1.php');
}

{

}

?>