<?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="acqualina";
       
       $con= mysqli_connect($servername, $username,$password, $dbname);
       if(!$con)
       {
           echo "error".mysqli_connect_error($con);
       }
?>