<?php
    require './db.php';
    
    $roomno=$_REQUEST['roomno'];
    $roomtype=$_REQUEST['roomtype'];
    $maxperson=$_REQUEST['maxperson'];
    $priceperday=$_REQUEST['priceperday'];
    $rid=$_REQUEST['rid'];
    
    $query="UPDATE tblroom SET roomid=$roomno,roomtype='$roomtype',maxperson=$maxperson,priceperday=$priceperday WHERE rid=$rid";
    $result= mysqli_query($con, $query);
    if($result)
    {
        
            echo "updated successfully";
            header('refresh:2;url=admin.php');
        
    }else{
        echo 'error';
        header('refresh:3;url=admin.php');
    }
?>