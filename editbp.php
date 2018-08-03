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
        <form action="updatebp.php" method="POST">
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
                        <td>arrival date</td>
                        <td><input type="date" name="arrdate" class="form-control" value="<?php echo $row['arrdate']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>arrival time</td>
                        <td><input type="time" name="arrtime" class="form-control" value="<?php echo $row['arrtime']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>checkout date</td>
                        <td><input type="date" name="checkoutdate" class="form-control" value="<?php echo $row['checkoutdate']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>checkout time</td>
                        <td><input type="time" name="checkouttime" class="form-control" value="<?php echo $row['checkouttime']; ?>"/></td>
                    <tr>
                        <td>no of people</td>
                        <td><input type="number" name="no_of_people" class="form-control" value="<?php echo $row['no_of_people']; ?>"/></td>
                    </tr>
                    
                    
                    <tr>
                        <td>room type</td>
                        <td><select class="form-control" name="roomtype">
								<option><?php echo $row['roomtype']; ?></option>
								<option value="Standard Double Room">Standard Double Room</option>
								<option value="Standard Family Room">Standard Family Room</option>
								<option value="Garden Family Room">Garden Family Room</option>
								<option value="Deluxe Double Room">Deluxe Double Room</option>
								<option value="Executive Junior Suite">Executive Junior Suite</option>
								<option value="Maisonette">Maisonette</option>
							</select></td>
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