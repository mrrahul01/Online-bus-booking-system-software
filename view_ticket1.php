<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ticket</title>
		
		<link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		<script src="js/jquery.min.js"></script> 
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script> 
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		</noscript>
		
		<style type="text/css">
		
input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:450px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color: 	#f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2{
	color:red;
}
h4
{
	color:#1D1414;
}
td{
	color:#1D1414;
}

.button {
    background-color: #3DE0E0;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
		</style>
		 <script language="javascript" type="text/javascript">
      function openwin()
      {
          window.open('view_ticket3.php', 'mywin', 'left =20,top=20,width=600,height=350,resizable=0');
          //location.href='view_ticket1.php';

      }
     </script>
	</head>
	<body style="background:-webkit-linear-gradient(left top,  #cce6ff,  #80bfff);">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">E-Ticketing</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="generic.php">Home</a></li>
					<!--	<li><a href="#book">Book Now</a></li>-->
						<li><a href="history1.php">Booking History</a></li>
						<li><a href="profile.php">View Profile</a></li>
						<li><a href="update.php">Update Profile</a></li>	
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
			<div class="container">
				<?php session_start();
				error_reporting(0);
				?>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font  size="35"><strong>Hello <z><?php echo $_SESSION['user']?></z></font></i></strong></center>
						<br>
						<h3>Welcome to E-Ticketing</h3>
					</header>

  
    				</div>
<center>	<h2>Your Ticket</h2> </center>



<?php 
include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;
$sel="SELECT * FROM `booking` where Booking_id='".$_GET['id']."'" ;
$str= mysql_query($sel);
$rows= mysql_num_rows($str);
if($rows==0 || $rows>1)
{
	header('Refresh:5; url=generic.php');

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{
	
	while($row=mysql_fetch_array($str))
{

	$query2="SELECT * FROM `bus`  where Id='".$row['Bus_id']."' ";
	$str1= mysql_query($query2);
	$row2= mysql_fetch_array($str1);
	$book_id=$row['Booking_id'];
	$Bus_id=$row['Bus_id'];

	echo '<div class="container">';
	echo '<table style="width:100%" align="center">';

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Date of Booking:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Date'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Bus Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Name'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Origin:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Origin'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Destination:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Destination'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Arrival time:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Arrival_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Departure time:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Departure_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Departure Place:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Departure_Place'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Date of journey:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Date'];
		echo "</td>";
	echo "</tr>";
	// echo "<tr>";
	// 	echo "<td>";
	// 	echo '<h4> <i>No of seats:</i></h4>';
	// 	echo "</td>";

	// 	echo "<td>";
	// 	echo $row['Seats_no'];
	// 	echo "</td>";
	// echo "</tr>";

	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Last Payment :</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Total_fare'];
		echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Payment method:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Payment_method'];
		echo "</td>";

	echo "</tr>";
	
	
	
	

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
	echo "<tr>";

  		echo "<td>";
		echo '<h4> <i>seats no :</i></h4>';
		echo "</td>";
echo "<td>";
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
echo "<tr>";


$query6="SELECT * FROM `booking`  where  user='".$_SESSION['user']."' AND Bus_id = '$Bus_id' ";
$str7= mysql_query($query6);

$rows2= mysql_num_rows($str7);
if($rows2==0)
{
	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
}
else
{
	echo "<tr>";

  		echo "<td>";
		echo '<h4> <i>Total Amount : </i></h4>';
		echo "</td>";
echo "<td>";
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
echo "</tr>";

echo "</tr>";
echo "</table>";
	echo '<button class="button"><a href="view_ticket2.php?id='.$book_id.'" > Generate Ticket </a></button>';
	echo "</div>";


	

?>



<br>
<br>
</div>
<div>
<a href="#" class="image fit"><img src="images1/bus1.jpg" alt="" /></a>
</div>
		<!-- Footer --><footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3>E-Ticketing</h3>
							<ul class="alt">
								<li>Quick Search</li>
								<li>Online Booking</li>
								<li>Pay Online/Bkash</li>
								<li>Bkash : 017xxxxxxxx</li>
							</ul>
						</section>
						<section class="4u 6u$(medium) 12u$(small)">
							<h3>Top Bus Routes</h3>
							<ul class="alt">
								<li>Dhaka - Chittagong</li>
								<li>Dhaka - Sylhet</li>
								<li>Dhaka - Rangpur</li>
								<li>Dhaka - Barishal</li>
							</ul>
						</section>
					<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contact Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									4 Embankment Drive Road<br>
									Sector 10, Uttara, Dhaka-1230
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">E-Ticketing@gmail.com</a>
								</li>
								<li>
									<h3>Phone</h3>
									(040) 122-2839
								</li>
							</ul>
						</section>
					</center>
					</div>
					<ul class="copyright">
						<li>&copy; E-Ticketing. All rights reserved.</li>
						</ul>
				</div>
			</footer>
	</body>
</html>