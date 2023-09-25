<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Payment</title>
    <
    <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	   
     <script src="js/bootstrap.min.js"></script> 
		<script src="js/jquery.min.js"></script> 
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script> 
		<script src="js/init.js"></script>
    <script src="js/1.12.0/jquery.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
      <link rel="stylesheet" href="css/bootstrap.css" />
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
height:780px;
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

.aaa{
  cursor: not-allowed;
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
    include "include.php";
		
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



  <?php
$sel="SELECT * FROM `seat` where Bus_id='".$_SESSION['Bus_id']."'";
$str= mysql_query($sel) or die(mysql_error());
$rows= mysql_num_rows($str) ;
// if($rows==0)
// {
// //  header('Refresh:5; url=generic.php');

//   echo '<h5 style= "text-align:center;"> <font color="red">Every Seat Is available </font></h3>';
//   echo "<br>";
// //  echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
// }
// else
// {

  
while($row=mysql_fetch_array($str))
{

  


  $a1= $row['a1'];
  
  $b1= $row['b1'];
  
  $c1= $row['c1'];
  
  $d1= $row['d1'];
  
  $e1= $row['e1'];
  
  $f1= $row['f1'];
  
  $g1= $row['g1'];
  
  $h1= $row['h1'];
  
  $i1= $row['i1'];
  
  $j1= $row['j1'];

  $a2= $row['a2'];
  
  $b2= $row['b2'];
  
  $c2= $row['c2'];
  
  $d2= $row['d2'];
  
  $e2= $row['e2'];
  
  $f2= $row['f2'];
  
  $g2= $row['g2'];
  
  $h2= $row['h2'];
  
  $i2= $row['i2'];
  
  $j2= $row['j2'];
  
  $a3= $row['a3'];
  
  $b3= $row['b3'];
  
  $c3= $row['c3'];
  
  $d3= $row['d3'];
  
  $e3= $row['e3'];
  
  $f3= $row['f3'];
  
  $g3= $row['g3'];
  
  $h3= $row['h3'];
  
  $i3= $row['i3'];
  
  $j3= $row['j3'];
  
  $a4= $row['a4'];
  
  $b4= $row['b4'];
  
  $c4= $row['c4'];
  
  $d4= $row['d4'];
  
  $e4= $row['e4'];
  
  $f4= $row['f4'];
  
  $g4= $row['g4'];
  
  $h4= $row['h4'];
  
  $i4= $row['i4'];
  
  $j4= $row['j4'];

  echo $row['a1'];
  echo " ";
  echo $row['b1'];
  echo " ";
  echo $row['c1'];
  echo " ";
  echo $row['d1'];
  echo " ";
  echo $row['e1'];
  echo " ";
  echo $row['f1'];
  echo " ";
  echo $row['g1'];
  echo " ";
  echo $row['h1'];
  echo " ";
  echo $row['i1'];
  echo " ";
  echo $row['j1'];
  echo " ";
  echo $row['a2'];
  echo " ";
  echo $row['b2'];
  echo " ";
  echo $row['c2'];
  echo " ";
  echo $row['d2'];
  echo " ";
  echo $row['e2'];
  echo " ";
  echo $row['f2'];
  echo " ";
  echo $row['g2'];
  echo " ";
  echo $row['h2'];
  echo " ";
  echo $row['i2'];
  echo " ";
  echo $row['j2'];
  echo " ";
  echo $row['a3'];
  echo " ";
  echo $row['b3'];
  echo " ";
  echo $row['c3'];
  echo " ";
  echo $row['d3'];
  echo " ";
  echo $row['e3'];
  echo " ";
  echo $row['f3'];
  echo " ";
  echo $row['g3'];
  echo " ";
  echo $row['h3'];
  echo " ";
  echo $row['i3'];
  echo " ";
  echo $row['j3'];
  echo " ";
  echo $row['a4'];
  echo " ";
  echo $row['b4'];
  echo " ";
  echo $row['c4'];
  echo " ";
  echo $row['d4'];
  echo " ";
  echo $row['e4'];
  echo " ";
  echo $row['f4'];
  echo " ";
  echo $row['g4'];
  echo " ";
  echo $row['h4'];
  echo " ";
  echo $row['i4'];
  echo " ";
  echo $row['j4'];
  
  
}


 echo " Those seats are booked already ";

echo " <table>";
echo"<tr>";
echo"<td>";
echo'<form action="book.php" method="POST">';

echo "Select Your Seats";
echo" <br>";
echo "<br>";
 
    
   

		if ($a1==A1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="a1" value="A1" disabled>A 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="a1" value="A1">A 1 ';
    echo '</label>';
  }
  

  if ($b1==B1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="b1" value="B1" disabled>B 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="b1" value="B1">B 1 ';
    echo '</label>';
  }


  if ($c1==C1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input   type="checkbox" name="c1" value="C1" disabled>C 1 ';
    echo '</label>';

  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="c1" value="C1">C 1 ';
    echo '</label>';
  }


  if ($d1==D1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="d1" value="D1" disabled> D 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="d1" value="D1"> D 1 ';
    echo '</label>';
  }

  if ($e1==E1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="e1" value="E1" disabled>E 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="e1" value="E1">E 1 ';
    echo '</label>';
  }

  if ($f1==F1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="f1" value="F1" disabled>F 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="f1" value="F1">F 1 ';
    echo '</label>';
  }

  if ($g1==G1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="g1" value="G1" disabled>G 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="g1" value="G1">G 1 ';
    echo '</label>';
  }


  if ($h1==H1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="h1" value="H1" disabled>H 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="h1" value="H1">H 1 ';
    echo '</label>';
  }


  if ($i1==I1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="i1" value="I1" disabled>I 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="i1" value="I1">I 1 ';
    echo '</label>';
  }


  if ($j1==J1) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="j1" value="J1" disabled>J 1 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="j1" value="J1">J 1 ';
    echo '</label>';
  }

echo "<br>";


if ($a2==A2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="a2" value="A2" disabled>A 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="a2" value="A2">A 2 ';
    echo '</label>';
  }
  

  if ($b2==B2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="b2" value="B2" disabled>B 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="b2" value="B2">B 2 ';
    echo '</label>';
  }


  if ($c2==C2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="c2" value="C2" disabled>C 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="c2" value="C2">C 2 ';
    echo '</label>';
  }


  if ($d2==D2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="d2" value="D2" disabled> D 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="d2" value="D2"> D 2 ';
    echo '</label>';
  }

  if ($e2==E2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="e2" value="E2" disabled>E 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="e2" value="E2">E 2 ';
    echo '</label>';
  }

  if ($f2==F2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="f2" value="F2" disabled>F 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="f2" value="F2">F 2 ';
    echo '</label>';
  }

  if ($g2==G2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="g2" value="G2" disabled>G 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="g2" value="G2">G 2 ';
    echo '</label>';
  }


  if ($h2==H2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="h2" value="H2" disabled>H 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="h2" value="H2">H 2 ';
    echo '</label>';
  }


  if ($i2==I2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="i2" value="I2" disabled>I 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="i2" value="I2">I 2 ';
    echo '</label>';
  }


  if ($j2==J2) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="j2" value="J2" disabled>J 2 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="j2" value="J2">J 2 ';
    echo '</label>';
  }

echo "<br>";
echo "<br>";

if ($a3==A3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="a3" value="A3" disabled>A 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="a3" value="A3">A 3 ';
    echo '</label>';
  }
  

  if ($b3==B3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="b3" value="B3" disabled>B 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="b3" value="B3">B 3 ';
    echo '</label>';
  }


  if ($c3==C3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="c3" value="C3" disabled>C 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="c3" value="C3">C 3 ';
    echo '</label>';
  }


  if ($d3==D3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="d3" value="D3" disabled> D 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="d3" value="D3"> D 3 ';
    echo '</label>';
  }

  if ($e3==E3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="e3" value="E3" disabled>E 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="e3" value="E3">E 3 ';
    echo '</label>';
  }

  if ($f3==F3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="f3" value="F3" disabled>F 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="f3" value="F3">F 3 ';
    echo '</label>';
  }

  if ($g3==G3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="g3" value="G3" disabled>G 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="g3" value="G3">G 3 ';
    echo '</label>';
  }


  if ($h3==H3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="h3" value="H3" disabled>H 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="h3" value="H3">H 3 ';
    echo '</label>';
  }


  if ($i3==I3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="i3" value="I3" disabled>I 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="i3" value="I3">I 3 ';
    echo '</label>';
  }


  if ($j3==J3) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="j3" value="J3" disabled>J 3 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="j3" value="J3">J 3 ';
    echo '</label>';
  }

echo '<br>';

if ($a4==A4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="a4" value="A4" disabled>A 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="a4" value="A4">A 4 ';
    echo '</label>';
  }
  

  if ($b4==B4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="b4" value="B4" disabled>B 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="b4" value="B4">B 4 ';
    echo '</label>';
  }


  if ($c4==C4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="c4" value="C4" disabled>C 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="c4" value="C4">C 4 ';
    echo '</label>';
  }


  if ($d4==D4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="d4" value="D4" disabled> D 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="d4" value="D4"> D 4 ';
    echo '</label>';
  }

  if ($e4==E4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="e4" value="E4" disabled>E 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="e4" value="E4">E 4 ';
    echo '</label>';
  }

  if ($f4==F4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="f4" value="F4" disabled>F 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="f4" value="F4">F 4 ';
    echo '</label>';
  }

  if ($g4==G4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="g4" value="G4" disabled>G 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="g4" value="G4">G 4 ';
    echo '</label>';
  }


  if ($h4==H4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="h4" value="H4" disabled>H 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="h4" value="H4">H 4 ';
    echo '</label>';
  }


  if ($i4==I4) {
    echo '<label class="checkbox-inline aaa">';
    echo'<input type="checkbox" name="i4" value="I4" disabled>I 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="i4" value="I4">I 4 ';
    echo '</label>';
  }


  if ($j4==J4) {
    echo '<label class="checkbox-inline aaa" >';
    echo'<input type="checkbox" name="j4" value="J4" disabled>J 4 ';
    echo '</label>';
  }
  else{
    echo '<label class="checkbox-inline">';
    echo'<input type="checkbox" name="j4" value="J4">J 4 ';
    echo '</label>';
  }





//} 
    ?>

	 
   

<br>
<br>
<h4>Bkash Agent Number: 017xxxxxxxx </h4>

<br>Choose a payment method  
<select name="Payment_method" class="form-control">
  	<option value="Bkash">Bkash</option>
  	<option value="cradit card">Cradit card</option>
</select>
<br>Bkash walet No.  
  <input class="form-control" placeholder="Enter Your BKash number" type="text" name="bkash_num" required>
  	<br>Transfer ID.  
  <input class="form-control" placeholder="Enter Transfer Id" type="text" name="trasfer_id" required>
  	<br>Departure Place
    <select name="Departure_Place" class="form-control">
    <option value="Gabtoli">Gabtoli</option>
    <option value="Uttara">Uttara</option>
    <option value="Saydabad">Saydabad</option>
</select>
<br>
  		<p> <i>Total Fare: <?php echo $_GET['Total_fare'] ?></i></p>

  		
  	
  <input class="btn btn-primary" type="submit" value="Submit">
  <br>
</form> 
</td>
<td>
<center><h3 style="float:left">Seat Layout</h3></center>
<img  src="images1/bus_layout.jpg" alt="Seat Layout" style="margin-bottom: 150px" >
</td>
</tr>
</table>
</div>
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