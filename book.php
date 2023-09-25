<?php
error_reporting(0);
include "include.php";

session_start();


$ins1="INSERT INTO `seat`(`Bus_id`,`Username`,`a1`,`b1`,`c1`,`d1`,`e1`,`f1`,`g1`,`h1`,`i1`,`j1`,`a2`,`b2`,`c2`,`d2`,`e2`,`f2`,`g2`,`h2`,`i2`,`j2`,`a3`,`b3`,`c3`,`d3`,`e3`,`f3`,`g3`,`h3`,`i3`,`j3`,`a4`,`b4`,`c4`,`d4`,`e4`,`f4`,`g4`,`h4`,`i4`,`j4`)VALUES
('".$_SESSION['Bus_id']."','".$_SESSION['user']."','".$_POST['a1']."','".$_POST['b1']."','".$_POST['c1']."','".$_POST['d1']."','".$_POST['e1']."','".$_POST['f1']."','".$_POST['g1']."','".$_POST['h1']."','".$_POST['i1']."','".$_POST['j1']."','".$_POST['a2']."','".$_POST['b2']."','".$_POST['c2']."','".$_POST['d2']."','".$_POST['e2']."','".$_POST['f2']."','".$_POST['g2']."','".$_POST['h2']."','".$_POST['i2']."','".$_POST['j2']."','".$_POST['a3']."','".$_POST['b3']."','".$_POST['c3']."','".$_POST['d3']."','".$_POST['e3']."','".$_POST['f3']."','".$_POST['g3']."','".$_POST['h3']."','".$_POST['i3']."','".$_POST['j3']."','".$_POST['a4']."','".$_POST['b4']."','".$_POST['c4']."','".$_POST['d4']."','".$_POST['e4']."','".$_POST['f4']."','".$_POST['g4']."','".$_POST['h4']."','".$_POST['i4']."','".$_POST['j4']."')";

mysql_query($ins1) or die(mysql_error());




$ins="INSERT INTO `booking`(`user`,`Bus_id`,`Seats_no`,`Total_fare`,`Payment_method`,`bkash_num`,`trasfer_id`,`Departure_Place`)VALUES('".$_SESSION['user']."','".$_SESSION['Bus_id']."','".$_SESSION['Seats_no']."','".$_SESSION['Total_fare']."','".$_POST['Payment_method']."','".$_POST['bkash_num']."','".$_POST['trasfer_id']."','".$_POST['Departure_Place']."')";
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

$upd= "UPDATE bus SET seats=(seats-$req) WHERE Id=$id";



mysql_query($ins) or die(mysql_error());
mysql_query($upd) or die(mysql_error());


	$_SESSION['pay'] = 'Payment successful...';
	header('location: generic.php');

?>