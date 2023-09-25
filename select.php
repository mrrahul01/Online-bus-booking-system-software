<?php
error_reporting(0);
include "include.php";

session_start();


$sel="SELECT * FROM `booking` where Bus_id='".$_SESSION['Bus_id']."' " ;
$str= mysql_query($sel) or die(mysql_error());
$rows= mysql_num_rows($str) ;
if($rows==0)
{
//	header('Refresh:5; url=generic.php');

	echo '<h3 style= "text-align:center;"> <font color="red">No available Buses </font></h3>';
	echo "<br>";
//	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{
while($row=mysql_fetch_array($str))
{
$Booking_id = $row['Booking_id'];

}
}

$_SESSION['Booking_id']=$_GET['Booking_id'];

$ins1="INSERT INTO `seat`(`Bus_id`, `Booking_id`,`Username`,`a1`,`b1`,`c1`,`d1`,`e1`,`f1`,`g1`,`h1`,`i1`,`j1`,`a2`,`b2`,`c2`,`d2`,`e2`,`f2`,`g2`,`h2`,`i2`,`j2`,`a3`,`b3`,`c3`,`d3`,`e3`,`f3`,`g3`,`h3`,`i3`,`j3`,`a4`,`b4`,`c4`,`d4`,`e4`,`f4`,`g4`,`h4`,`i4`,`j4`)VALUES
('".$_SESSION['Bus_id']."','".$_SESSION['Booking_id']."','".$_SESSION['user']."','".$_POST['a1']."','".$_POST['b1']."','".$_POST['c1']."','".$_POST['d1']."','".$_POST['e1']."','".$_POST['f1']."','".$_POST['g1']."','".$_POST['h1']."','".$_POST['i1']."','".$_POST['j1']."','".$_POST['a2']."','".$_POST['b2']."','".$_POST['c2']."','".$_POST['d2']."','".$_POST['e2']."','".$_POST['f2']."','".$_POST['g2']."','".$_POST['h2']."','".$_POST['i2']."','".$_POST['j2']."','".$_POST['a3']."','".$_POST['b3']."','".$_POST['c3']."','".$_POST['d3']."','".$_POST['e3']."','".$_POST['f3']."','".$_POST['g3']."','".$_POST['h3']."','".$_POST['i3']."','".$_POST['j3']."','".$_POST['a4']."','".$_POST['b4']."','".$_POST['c4']."','".$_POST['d4']."','".$_POST['e4']."','".$_POST['f4']."','".$_POST['g4']."','".$_POST['h4']."','".$_POST['i4']."','".$_POST['j4']."')";

mysql_query($ins1) or die(mysql_error());


$tk=$_SESSION['Total_fare'];
$req=$_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];



//echo "registered succesfully";
	//$_SESSION['user']=$_POST["Username"];
	$_SESSION['pay'] = 'Payment successful...';
	header('location: generic.php');
//echo '<script language="javascript">document.location.href="web_home.php"</script>';
?>