<?php
include "include.php";


	$pass=($_POST["Password"]);

$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' and Password='$pass'";

$result=mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Invalid username or password';
  	header('Location: index4.php');
	
}
	

else
{
	
	session_start();
	$_SESSION['user']=$_POST["Username"];
echo '<script language="javascript">document.location.href="generic.php"</script>';
}
	

?>