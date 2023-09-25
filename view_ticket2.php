<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ticket</title>
		
		<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		
	
		 <SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print Ticket" onClick="window.print()"></form>');
}
</script>

     <style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: center;
}

table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    padding: 3px;
   }
   img
   {
   	border-radius: 10%;
   }
</style>
	</head>
	<body margin-top: 0px;>

		
				<?php session_start();
				error_reporting(0);
				?>
	<center><img src="images1/buslogo.jpg" alt="logo"></center>	
<center>	<h1>Your Ticket</h1> </center>
<div>
<table style="width:70%" align="center" >
	<tr>
		<center><h2>E-Ticketing System</h2></center>
		 <?php
		 
		 ?> 
	</tr>
</table>
</div>

<?php 
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `booking` where Booking_id='".$_GET['id']."'" ;
$str= mysql_query($sel);
$rows= mysql_num_rows($str);
if($rows==0 || $rows>1)
{
	header('url=generic.php');
}
else
{
	
	while($row=mysql_fetch_array($str))
{

	$query2="SELECT * FROM `bus` where Id='".$row['Bus_id']."'" ;
	$str1= mysql_query($query2);
	$row2= mysql_fetch_array($str1);
	$book_id=$row['Booking_id'];
	$Bus_id=$row['Bus_id'];
	//$ticketid=$route."00".$num;


	echo '<table align="center">';
	echo"<center>";
	echo'<h5 style="margin-left: 550px">Ticket num :  ';
	echo uniqid($Bus_id);
	echo"</h5>";
	echo"</center>";

	echo "<tr>";
		echo "<td COLSPAN='2'>";
		echo '<h4> <i>Bus Name:</i></h4>';
		echo "</td>";

		echo "<td COLSPAN='3'>";
		echo $row2['Name'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td COLSPAN='2'>";
		echo '<h4> <i>Passenger Name:</i></h4>';
		echo "</td>";

		echo "<td COLSPAN='3'>";
		echo $row['user'];
		echo "</td>";
	echo "</tr>";

	echo "<tr>";
		

		echo "<td COLSPAN='2'>";
		echo $row2['Origin'];
		echo "			to 				";
		echo $row2['Destination'];
		echo "</td>";

		echo "<td>";
		echo '<h4> <i>Issue Date: 	</i></h4>';
		// echo "</td>";
		// echo "<td>";
		echo $row['Date'];
		echo "</td>";

		echo "<td>";
		echo '<h4> <i>Date of journey:</i></h4>';
		//echo "</td>";

		//echo "<td>";
		echo $row2['Date'];
		echo "</td>";

		echo "<td>";
		echo '<h4> <i>Bus No : 	</i></h4>';
		// echo "</td>";
		// echo "<td>";
		echo $row2['Id'];
		echo "</td>";

		

		
	echo "</tr>";
	
	
	echo "<tr>";
		//echo "<td >";
		
		//echo '<h4> <i>Total Amount:</i></h4>';
		

		
		//echo $row['Total_fare'];
		//echo "</td>";

		
		//echo "</td>";

		//echo "<td>";
		//echo '<h4> <i>No of seats:</i></h4>';
		//echo "</td>";

		//echo "<td>";
		//echo $row['Seats_no'];
		//echo "</td>";
	
		
		echo "<td>";
		echo '<h4> <i>Arrival time:</i></h4>';
		//echo "</td>";

		//echo "<td>";
		echo $row2['Arrival_time'];
		echo "</td>";

		

		echo "<td>";
		echo '<h4> <i>Departure time:</i></h4>';
		//echo "</td>";

		//echo "<td>";
		echo $row2['Departure_time'];
		echo "</td>";

		echo "<td>";
		echo '<h4> <i>Departure Place:</i></h4>';
		//echo "</td>";

		//echo "<td>";
		echo $row['Departure_Place'];
		echo "</td>";

		


	
}}

$query5="SELECT * FROM `seat`  where  Username='".$_SESSION['user']."' AND Bus_id = '$Bus_id' ";
	$str6= mysql_query($query5);

$rows1= mysql_num_rows($str6);
if($rows1==0)
{
	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
}
else
{
	//echo "<tr>";

  		echo "<td>";
		echo '<h4> <i>seats no :</i></h4>';
		//echo "</td>";
//echo "<td>";
	while ($row6= mysql_fetch_array($str6)) 
{


	

  echo $row6['a1'];
  echo " ";
  echo $row6['b1'];
  echo " ";
  echo $row6['c1'];
  echo " ";
  echo $row6['d1'];
  echo " ";
  echo $row6['e1'];
  echo " ";
  echo $row6['f1'];
  echo " ";
  echo $row6['g1'];
  echo " ";
  echo $row6['h1'];
  echo " ";
  echo $row6['i1'];
  echo " ";
  echo $row6['j1'];
  echo " ";
  echo $row6['a2'];
  echo " ";
  echo $row6['b2'];
  echo " ";
  echo $row6['c2'];
  echo " ";
  echo $row6['d2'];
  echo " ";
  echo $row6['e2'];
  echo " ";
  echo $row6['f2'];
  echo " ";
  echo $row6['g2'];
  echo " ";
  echo $row6['h2'];
  echo " ";
  echo $row6['i2'];
  echo " ";
  echo $row6['j2'];
  echo " ";
  echo $row6['a3'];
  echo " ";
  echo $row6['b3'];
  echo " ";
  echo $row6['c3'];
  echo " ";
  echo $row6['d3'];
  echo " ";
  echo $row6['e3'];
  echo " ";
  echo $row6['f3'];
  echo " ";
  echo $row6['g3'];
  echo " ";
  echo $row6['h3'];
  echo " ";
  echo $row6['i3'];
  echo " ";
  echo $row6['j3'];
  echo " ";
  echo $row6['a4'];
  echo " ";
  echo $row6['b4'];
  echo " ";
  echo $row6['c4'];
  echo " ";
  echo $row6['d4'];
  echo " ";
  echo $row6['e4'];
  echo " ";
  echo $row6['f4'];
  echo " ";
  echo $row6['g4'];
  echo " ";
  echo $row6['h4'];
  echo " ";
  echo $row6['i4'];
  echo " ";
  echo $row6['j4'];
//echo $row7['Total_fare'];
}}

echo "</td>";
//echo "<tr>";


$query6="SELECT * FROM `booking`  where  user='".$_SESSION['user']."' AND Bus_id = '$Bus_id' ";
$str7= mysql_query($query6);

$rows2= mysql_num_rows($str7);
if($rows2==0)
{
	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
}
else
{
	//echo "<tr>";

  		echo "<td>";
		echo '<h4> <i>Total Amount : </i></h4>';
		//echo "</td>";
//echo "<td>";
	while ($row7= mysql_fetch_array($str7)) 
{

//$total=0;
$Totala = $row7['Total_fare'];
$total +=  $Totala;
//echo "<td>";

}
}
echo $total;
echo "</td>";
///echo "</tr>";

echo "</tr>";
echo "</table>";


?>




	</body>
</html>