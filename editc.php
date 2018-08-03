<?php
require './db.php';
include './header1.php'

?>
<html>
    <head>
        <title>edit cusotmer profile</title>
    </head>
    <body>
         <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">Edit profile</h2>
    </div>
        <form action="update.php" method="POST">
            <table class="table table-bordered table-striped">
                <tbody>
                     <?php
                    $cname='bid';
                    $tname='tblbook';
                    $id=$_REQUEST['id'];
                        $query="SELECT * FROM customers WHERE cid=$id";
                        $result= mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                $row= mysqli_fetch_assoc($result);
                                
                        
                    ?>
                    <tr>
                        <td>first name</td>
                        <td><input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>last name</td>
                        <td><input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>email address</td>
                     <td><input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>contact number</td>
                        <td><input type="text" name="phno" class="form-control" value="<?php echo $row['phno']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>city</td>
                        <td><input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>"/></td>
                    </tr>
                   
                       <input type="hidden" name="cid" value="<?php echo $row['cid']; ?>"/>
                    <?php
                                }
                            }else{
                                echo "error";
                            }
                        
                        
                    ?>
                       <tr>
                           <td><input type="submit" class="btn btn-warning" value="update" /></td>
                           <td><input type="reset" class="btn btn-danger" value="undo" /></td>
                       </tr>
                </tbody>
            </table>
            
        </form>
    </body>
</html>