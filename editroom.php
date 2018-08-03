<?php
require './db.php';
include './header1.php'

?>
<html>
    <head>
        <title>edit rooms</title>
    </head>
    <body>
         <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">Edit rooms</h2>
    </div>
        <form action="updater.php" method="POST">
            <table class="table table-bordered table-striped">
                <tbody>
                     <?php
                    $cname='bid';
                    $tname='tblbook';
                    $id=$_REQUEST['id'];
                        $query="SELECT * FROM tblroom WHERE rid=$id";
                        $result= mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                $row= mysqli_fetch_assoc($result);
                                
                        
                    ?>
                    <tr>
                        <td>room no</td>
                       <td><input type="number" name="roomno" class="form-control" value="<?php echo $row['roomid']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Roomtype</td>
                        <td><input type="text" name="roomtype" class="form-control" value="<?php echo $row['roomtype']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>max person</td>
                     <td><input type="number" name="maxperson" class="form-control" value="<?php echo $row['maxperson']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>Price per day</td>
                        <td><input type="number" name="priceperday" class="form-control" value="<?php echo $row['priceperday']; ?>"/></td>
                    </tr>
                   
                       <input type="hidden" name="rid" value="<?php echo $row['rid']; ?>"/>
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