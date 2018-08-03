<?php
require './db.php';
$roomno=$_REQUEST['roomno'];
$roomtype=$_REQUEST['roomtype'];
$maxperson=$_REQUEST['maxperson'];
$priceperday=$_REQUEST['priceperday'];

$query="INSERT INTO tblroom(roomid,roomtype,maxperson,priceperday,locked) VALUES ($roomno,'$roomtype',$maxperson,$priceperday,'N')";
$result=mysqli_query($con,$query);
if($result)
{
    echo "inserted successfully";
    header('refresh:2;admin.php');
    
} else{
    echo "error";
}
?>