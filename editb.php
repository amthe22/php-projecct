<?php
require './db.php';
include './header1.php'

?>
<html>
    <head>
        <title>edit bookings</title>
    </head>
    <body>
         <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">Edit Booking</h2>
    </div>
        <form action="updateb.php" method="POST">
            <table class="table table-bordered table-striped">
                <tbody>
                     <?php
                    $cname='bid';
                    $tname='tblbook';
                    $id=$_REQUEST['id'];
                        $query="SELECT * FROM tblbook WHERE bid=$id";
                        $result= mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                $row= mysqli_fetch_assoc($result);
                                
                        
                    ?>
                    <tr>
                        <td>booking id</td>
                        <td><?php echo $row['bid']; ?></td>
                    </tr>
                    <tr>
                        <td>arrival date</td>
                        <td><?php echo $row['arrdate']; ?></td>
                    </tr>
                    <tr>
                        <td>arrival time</td>
                        <td><?php echo $row['arrtime']; ?></td>
                    </tr>
                    <tr>
                        <td>checkout date</td>
                        <td><?php echo $row['checkoutdate']; ?></td>
                    </tr>
                    <tr>
                        <td>checkout time</td>
                        <td><?php echo $row['checkouttime']; ?></td>
                    <tr>
                        <td>no o people</td>
                        <td><?php echo $row['no_of_people']; ?></td>
                    </tr>
                    
                    <tr>
                        <td>Enter the roomno</td>
                        <td><input type="number" name="roomno" class="form-control" value="<?php echo $row['roomno']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>room type</td>
                        <td><?php echo $row['roomtype']; ?></td>
                    </tr>
                    <tr>
                        <td>customer id</td>
                        <td><?php echo $row['cid']; ?></td>
                    </tr>
                    <tr>
                        <td>booking time</td>
                        <td><?php echo $row['booktime']; ?></td>
                       </tr>
                       <input type="hidden" name="bid" value="<?php echo $row['bid']; ?>"/>
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