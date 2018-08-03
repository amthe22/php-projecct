<?php
    require './db.php';
    
    $folder=$_REQUEST['folder'];
    $name=$_REQUEST['name'];
    $size=$_REQUEST['size'];
    $imageid=$_REQUEST['imageid'];
    
    $query="UPDATE tblimage SET folder='$folder',name='$name',size=$size WHERE imageid=$imageid";
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