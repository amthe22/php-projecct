<?php

	require './db.php';
        SESSION_START();
        
        
        $fname=$_REQUEST['fname'];
        $lname=$_REQUEST['lname'];
        $email=$_REQUEST['txtemail'];
        $phno=$_REQUEST['mnumber'];
        $p1=md5($_REQUEST['txtp1']);
        $p2=md5($_REQUEST['txtp2']);
        $city=$_REQUEST['txtcity'];
        
        if($p1==$p2){
            $sql="INSERT INTO customers(fname,lname,email,password,phno,city) VALUES ('$fname','$lname','$email','$p1','$phno','$city')";
            $result= mysqli_query($con, $sql);
            if($result)
            {
                $s="SELECT cid from customers WHERE email='$email'";
                $r=mysqli_query($con,$s);
                if($r){
                    if(mysqli_num_rows($r)>0){
                    $ro= mysqli_fetch_assoc($r);
                        $cid=$ro['cid'];
                        echo $cid;
                        $_SESSION['cid']=$cid;
                    }
                }else{
                    echo "error";
                }
               $_SESSION['username']=$fname;
               $_SESSION['email']=$email;
               $uname='admin@aqualina.com';
               if($_SESSION['email']==$uname)
               {
               echo "successfully created";
               header("refresh:1;url=admin.php");
               }else{
                   echo "successfully created";
               header("refresh:3;url=index.php");
               }
            }else
            {
                echo 'unsuccessful';
                header('refresh:2;url=signup.php');
            }
        }
        else{
            echo 'passwords are not matching';
            header('refresh:3;url=signup.php');
        }
        
?>