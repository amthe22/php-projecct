<?php
    require './db.php';
    
$arrdate=$_REQUEST['arrdate'];
$arrtime=$_REQUEST['arrtime'];
$checkoutdate=$_REQUEST['checkoutdate'];
$checkouttime=$_REQUEST['checkouttime'];
$roomtype=$_REQUEST['roomtype'];
$np=$_REQUEST['no_of_people'];    
    $bid=$_REQUEST['bid'];
    
    $query="UPDATE tblbook SET arrdate='$arrdate',arrtime='$arrtime',checkoutdate='$checkoutdate',checkouttime='$checkouttime',roomtype='$roomtype',no_of_people=$np  WHERE bid=$bid";
    $result= mysqli_query($con, $query);
    if($result)
    {
        
            echo 'UPDATED SUCCESSFULLY';
            header('refresh:3;url=profile.php');
        
    }else{
        echo 'error';
        header('refresh:3;url=profile.php');
    }
?>