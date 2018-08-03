<?php
    require './db.php';
    
    $roomno=$_REQUEST['roomno'];
    $bid=$_REQUEST['bid'];
    
    $query="UPDATE tblbook SET roomno=$roomno WHERE bid=$bid";
    $result= mysqli_query($con, $query);
    if($result)
    {
        $sql="UPDATE tblroom SET locked='Y' WHERE roomid=$roomno";
        $re= mysqli_query($con,$sql);
        if($re){
            echo "updated successfully";
            header('refresh:2;url=admin.php');
        }else
        {
            echo 'error in tblroom';
            header('refresh:3;url=admin.php');
        }
    }else{
        echo 'error in tblbook';
        header('refresh:3;url=admin.php');
    }
?>