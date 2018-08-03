<?php
SESSION_START();
require './db.php';

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$arrdate=$_REQUEST['arrdate'];
$arrtime=$_REQUEST['arrtime'];
$checkoutdate=$_REQUEST['checkoutdate'];
$checkouttime=$_REQUEST['checkouttime'];
$roomtype=$_REQUEST['roomtype'];
$np=$_REQUEST['np'];        
$cid=$_SESSION['cid'];
$bktime=date("g.i a", time());

$sql="INSERT INTO tblbook(arrdate,arrtime,checkoutdate,checkouttime,no_of_people,roomtype,cid,booktime) VALUES ('$arrdate','$arrtime','$checkoutdate','$checkouttime',$np,'$roomtype',$cid,'$bktime')";
$query= mysqli_query($con,$sql);
if($query){
    echo 'booked successfully';
    header('refresh:1;url=index.php');
}
else{
    echo "error";
}
?>