<html>
	<head>
		
	</head>
	<body>
		<?php 
include "include.php";

		$query2="SELECT * FROM `seat`  where Bus_id='".$row['Bus_id']."' AND Username='".$_SESSION['user']."'";
	$str1= mysql_query($query2);
	$rows= mysql_num_rows($str1);
	if($rows==0 || $rows>1)
{
	

	echo '<h3 style= "text-align:center;"> <font color="red">Data Base Error </font></h3>';
	echo "<br>";
	echo '<p style= "text-align:center">Redirecting to the home page in 5 seconds</p>';
}
else
{
	
	while($row=mysql_fetch_array($str1))
{
	echo "<table>";
echo "<tr>";
		echo "<td>";
		echo '<h4> <i>seats:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row3['a1'];
		echo "</td>";
	echo "</tr>";
	echo "</table>";

}
}
?>
	</body>
</html>