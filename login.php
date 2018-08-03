	t<?php
    SESSION_START();
   
    require './db.php';
    
    $email=$_REQUEST['txtemail'];
    $password=md5($_REQUEST['txtpassword']);
    
    $query="SELECT * FROM customers WHERE email='$email'";
    $result=mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {  
            $row= mysqli_fetch_assoc($result);
             if($row['password']==$password)
             {
                 $uname='admin@acqualina.com';
            if($row['email']==$uname)
            {
                $_SESSION['cid']=$row['cid'];
                $_SESSION['email']=$uname;
                $_SESSION['username']=$row['fname'];
                header('location:admin.php');
            }else{
                $_SESSION['cid']=$row['cid'];
                 $_SESSION['email']=$row['email'];
                $_SESSION['username']=$row['fname'];
                header('location:index.php');
            }
                
        }else{
            echo "wrong password";
            header('refresh:2;url=signup.php');
        }
        }
    }
    else{
        echo "wrong email/password";
         header('refresh:2;url=signup.php');
        
    }
?>