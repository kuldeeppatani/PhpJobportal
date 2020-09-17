<?php
session_start();
$db=mysqli_connect('localhost','root','root','jobportal');
if(isset($_POST['save']))
{
	$jt=$_POST['job'];
	$pt=$_POST['post'];
	$ty=$_POST['techno'];
	$ln=$_POST['location'];
	$cnam=$_POST['cname'];
	$sp=$_POST['salary'];
	$ad=$_POST['add'];

	
mysqli_query($db,"INSERT INTO `job`( `Job Title`, `Post`, `Technology`, `Location`, `Company`, `Salary`, `Address`,`status`) VALUES ('$jt','$pt','$ty','$ln','$cnam','$sp','$ad','Pending')");
header('location:job.php');	
}
?>