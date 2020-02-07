<?php
session_start();
$con=mysqli_connect('localhost','root');
if($con)
{
	echo"connection succes";
	
}
else
{
	echo"no connection";
}
$_SESSION['pageviews']=0;
$_SESSION['count']=0;
$_SESSION['p']=array();
$s=array();
mysqli_select_db($con,'session');
$name=$_POST['user'];
$pass=$_POST['password'];
$q=" select * from signin where name='$name' && password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$name;
	header('location:cp.php');
}
else
{
	header('location:login.php');
}
?>