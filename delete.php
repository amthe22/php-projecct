<?php
include './db.php';
SESSION_START();
$id=$_REQUEST['id'];
$cname=$_REQUEST['cname'];
$tname=$_REQUEST['tname'];
if($_SESSION['email']=='admin@acqualina.com')
{
$query="DELETE FROM $tname WHERE $cname=$id";
$result= mysqli_query($con, $query);
if($result)
{
    $uname='admin@acqualina.com';
   if($_SESSION['email']==$uname)
    {
        header('location:admin.php');
    }
    else{
        header('location:profile.php');
    }
}else{
    echo "error";
}
}else{
    $sql="SELECT * FROM tblbook WHERE bid=$id";
    $re= mysqli_query($con, $sql);
    if($re){
        if(mysqli_num_rows($re)>0)
        {
            $ro= mysqli_fetch_assoc($re);
            $customerid=$ro['cid'];
            $roomno=$ro['roomno'];
            $cantime=date("g.i a", time());
            $s="INSERT INTO tblcancellation(cid,bid,canceltime) VALUES($customerid,$id,'$cantime')";
            $res= mysqli_query($con, $s);
            if(!$re){
                echo "error in inserting the cancellation";
            }
            $sroom="UPDATE tblroom SET locked='N' WHERE roomid=$roomno";
            $rroom=mysqli_query($con,$sroom);
            if(!$rroom){
                echo "error in updating the room";
            }
        }
    }
    $query="DELETE FROM $tname WHERE $cname=$id";
$result= mysqli_query($con,$query);
if($result)
{
    echo "booking canceled successfully";
    header('refresh:2;profile.php');
}
}
?>