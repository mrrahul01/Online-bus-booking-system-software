<?php
include "include.php";


	$pass=$_POST["Password"];

$sel="SELECT * FROM `admin` where Username='".$_POST["Username"]."' and Password='$pass'";

$result=mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Invalid username or password';
  	header('Location: admin1.php');
	
}
	

else
{
	
	session_start();
	$_SESSION['admin']=$_POST["Username"];
echo '<script language="javascript">document.location.href="admin_home1.php"</script>';
}
	

?>




