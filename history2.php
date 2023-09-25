<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bus_details</title>
		
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
		</noscript>
		
		<style type="text/css">
		
.font{
	font-size: 15px;
	color: #cccccc;
}
h2{
	color:red;
}
h4
{
	color:white;
}
td{
	color:#1D1414;
}
		</style>
	</head>
	<body style="background:-webkit-linear-gradient(left top,  #cce6ff,  #80bfff);">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">E-Ticketing</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="admin_home1.php">Home</a></li>
					<li><a href="manage_bus.php">Manage Bus</a></li>
						<li><a href="admin_logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>
			<div class="container">
			<?php
		session_start();
		
	
		?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font size="35"><strong>Hello <z><?php echo $_SESSION['admin']?></z></font></i></strong></center>
						<br>
						<h3>Welcome to E-Ticketing</h3>
					</header>

			</section>
			
	<div class="font">						</div>

<?php 
error_reporting(0);
include "include.php";
$sel="SELECT * FROM `booking` where date(Date)='".$_GET["Date"]."' or date(Date)='".$_GET["Date1"]."'  " ;
$str= mysql_query($sel) or die(mysql_error());
$rows= mysql_num_rows($str) ;
if($rows==0)
{


	echo '<h3 style= "text-align:center;"> <font color="red">No Booking </font></h3>';
	echo "<br>";

}
else
{

	echo '<table align="center" border=1 >
<tr>
<th> User Name</th>
<th> Date and Time</th>
<th> Route</th>
<th> Bus id  </th>
<th> No of seats</th>
<th> Total fare </th>


</tr>';
while($row=mysql_fetch_array($str))

{	
	$query2="SELECT * FROM `bus`  where Id='".$row['Bus_id']."' ";
	$str1= mysql_query($query2);
	$row2= mysql_fetch_array($str1);
	
	$Bus_id=$row['Bus_id'];



	$user= $row['user'];
	$Date= $row['Date'];
	$Fare = $row['Total_fare'];
	$id= $row['Bus_id'];
	$req=$row['Seats_no'];
	$book_id=$row['Booking_id'];
	$sum += $Fare;
	echo "<tr>";
	
	echo "<td>".$row['user']."</td>";
	echo "<td>".$row['Date']."</td>";
	echo "<td>";
		echo $row2['Origin'];
		echo "			to 				";
		echo $row2['Destination'];
		echo "</td>";
	echo "<td>".$row['Bus_id']."</td>";
	echo "<td>".$row['Seats_no']."</td>";
	echo "<td>".$row['Total_fare']."</td>";
	echo "<td>";
	
	echo "</tr>"; 
	
}

echo "</table>";

	echo "<p style= 'text-align:center'> Total Amount :   $sum </p>";

}	
?>
<br>
</div>
<div>
<a href="#" class="image fit"><img src="images1/bus11.jpg" alt="" /></a>
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