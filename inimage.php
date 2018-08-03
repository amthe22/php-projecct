<?php
    require './db.php';
    
    $folder=$_REQUEST['folder'];
    $name=$_REQUEST['name'];
    $size=$_REQUEST['size'];
    
    $query="INSERT INTO tblimage(folder,name,size) VALUES('$folder','$name',$size)";
    $result= mysqli_query($con, $query);
    if($result)
    {
        echo "image successfully inserted";
        header('refresh:2;admin.php');
    }
    else
    {
        echo "error";
    }
?>
