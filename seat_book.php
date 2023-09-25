<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Payment</title>
    
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
margin-left: 0px;
float: left;
position:relative;
width:550px;
height:650px;
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
h2
{
	color:red;
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
		session_start();
		error_reporting(0);
		
		$_SESSION['Total_fare']=$_GET['Total_fare'];
		$_SESSION['Bus_id']=$_GET['Bus_id'];
		$_SESSION['Seats_no']=$_GET['Seats_no'];

    

    
		?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<center><i><font size="35"><strong>Hello <z><?php echo $_SESSION['user']?></z></font></i></strong></center>
						<br>
						<h3>Welcome to E-Ticketing</h3>
					</header>

							</div>
			</section>
			 
<div>
        <center>  <h2>Payment</h2> </center>
<table>
<tr>
<td>
			<form action="select.php" method="POST">
       
Select Your Seats <br>			
	<label class="checkbox-inline">
      <input type="checkbox" name="a1" value="A1">A 1
     </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="b1" value="B1">B 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="c1" value="C1">C 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="d1" value="D1">D 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="e1" value="E1">E 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="f1" value="F1">F 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="g1" value="G1">G 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="h1" value="H1">H 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="i1" value="I1">I 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="j1" value="J1">J 1
    </label>
    <br>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="A2">A 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="B2">B 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="C2">C 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="D2">D 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="E2">E 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="F2">F 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="G2">G 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="H2">H 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="I2">I 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="J2">J 2
    </label>
    <br>
    <br>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="A3">A 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="B3">B 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="C3">C 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="D3">D 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="E3">E 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="F3">F 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="G3">G 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="H3">H 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="I3">I 3
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="J3">J 3
    </label>
    <br>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="A4">A 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="B4">B 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="C4">C 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="D4">D 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="E4">E 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="F4">F 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="G4">G 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="H4">H 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="I4">I 4
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="seat" value="J4">J 4
    </label> 

<br>


  		
  	
  <input class="btn btn-primary" type="submit" value="Submit">
  <br>
</form> 
</td>
<td>
<center><h3 style="float:left">Seat Layout</h3></center>
<img  src="images1/bus_layout.jpg" alt="Seat Layout style="float:right" ">
</td>
</tr>
</table>
</div>
<div>
<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
</div>
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