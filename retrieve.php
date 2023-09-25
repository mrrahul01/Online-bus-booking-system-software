<?php
include "include.php";


$sel="SELECT * FROM `user` where Username='".$_POST["Username"]."' ";

$result=mysql_query($sel) or die(mysql_error());

if(mysql_num_rows($result) == 0)
{
	session_start();
	$_SESSION['error'] = 'Username does not exist';
  	header('Location: forgetpass.php');
	
}
	

else
{
	
	$security=$_POST["Security"];
	$res=mysql_fetch_array($result);
	if($res['Security']!=$security)
	{
		session_start();
	$_SESSION['error'] = 'Wrong answer <br/> to the security quesiton...';
  	header('Location: forgetpass.php');
	}
	else
	{
		$pass=($_POST['New']);

	
		$upd= "UPDATE user SET Password='$pass' WHERE Username='".$_POST["Username"]."'";
		$result=mysql_query($upd) or die(mysql_error());
	
		session_start();
	$_SESSION['change'] = 'Password changed succesfully..';
  	header('Location:index4.php');
	}

}
	

?>