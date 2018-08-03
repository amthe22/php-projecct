<?php

require './db.php';

$cid=$_REQUEST['cid'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$num=$_REQUEST['phno'];
$city=$_REQUEST['city'];

$query="UPDATE customers SET fname='$fname',lname='$lname',email='$email',phno='$num',city='$city' WHERE cid=$cid ";
$result=mysqli_query($con,$query);
if($result)
{
	echo "updated successfully";
	header('refresh:2;url=profile.php');
}
else
{
	echo "error";
}
?>