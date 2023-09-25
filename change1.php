<?php
include "include.php";

session_start();

$_SESSION['Bus_id']=$_GET['Id'];


$upd= "UPDATE `bus` SET Name='".$_POST['Name']."',Type='".$_POST['Type']."',
Origin='".$_POST['Origin']."',Destination='".$_POST['Destination']."',Seats='".$_POST['Seats']."',
Arrival_time='".$_POST['Arrival_time']."',Departure_time='".$_POST['Departure_time']."',
Date='".$_POST['Date']."',Fare='".$_POST['Fare']."' WHERE Id='".$_SESSION['Bus_id']."' ";

mysql_query($upd) or die(mysql_error());


$_SESSION['updt']='Bus updated successfully...';
	header('location: manage_bus.php');








?>