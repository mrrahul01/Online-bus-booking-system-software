<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>History</title>
		
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
	<?php
	error_reporting(0);
		session_start();
		
		
			if(isset($_SESSION['del']))
		{
			echo '<p class="message"> <font size="4" color="MediumMagenta"><center> <i>';
			echo $_SESSION['del'];
			echo $_SESSION['refund'];
			echo $_SESSION['mesg'];
			echo "</i></center></font></p>";
			unset($_SESSION['del']);
		}
	
		?>

	
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font size="35"><strong>Hello <z><?php echo $_SESSION['user']?></z></font></i></strong></center>
						<br>
						<h3>Welcome to E-Ticketing</h3>
					</header>

							</div>
<center>	<h2>Booking History</h2> </center>
<?php 
include "include.php";

$sel="SELECT * FROM `booking` where user='".$_SESSION['user']."'" ;
$str= mysql_query($sel);
$rows= mysql_num_rows($str);
if($rows==0 )
{
	echo '<h3 style= "text-align:center;"> <font color="red">You have not booked any buses </font></h3>';
	echo "<br>";
}
else
{
	
echo '<table align="center" border=1 >
<tr>
<th> Date and Time</th>
<th> Bus id  </th>
<th> No of seats</th>
<th> Total fare </th>

<th> Payment method </th>
<th> Cancel now </th> 
<th> View Ticket</th>
</tr>';
while($row=mysql_fetch_array($str))
{
	$Date= $row['Date'];
	$Fare= $row['Total_fare'];
	$id= $row['Bus_id'];
	$req=$row['Seats_no'];
	$book_id=$row['Booking_id'];
	echo "<tr>";
	
	echo "<td>".$row['Date']."</td>";
	echo "<td>".$row['Bus_id']."</td>";
	echo "<td>".$row['Seats_no']."</td>";
	echo "<td>".$row['Total_fare']."</td>";
	
	echo "<td>".$row['Payment_method']."</td>";
	echo "<td>";
	echo '<a href="cancel.php?Date='.$Date.' & Fare='.$Fare.'& id='.$id.'& req='.$req.'">Cancel Now</a>';
	echo "</td>";
	echo "<td>";
	echo '<a href="view_ticket1.php?id='.$book_id.'">View Ticket</a>';
	echo "</td>";
	echo "</tr>"; 
}
echo "</table>";
}	
?>
			</section>
			
<br>
</div>
<div>
<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
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