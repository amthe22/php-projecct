<?php
    include './header1.php';
    require './db.php';
?>
<html>
    <head>
        
     
    <script>
            $(function(){
               $("#tab").tabs();
            });
            </script>
    </head>    
<body>
    <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">WELCOME TO ADMIN PAGE</h2>
    </div>
    <div id="tab">
        <ul>
            <li><a href="#tabs-1" class="btn btn-warning">customer details</a></li>
            <li><a href="#tabs-2" class="btn btn-warning">booking details</a></li>
            <li><a href="#tabs-3" class="btn btn-warning">cancellation details</a></li>
            <li><a href="#tabs-4" class="btn btn-warning">room details</a></li>
            <li><a href="#tabs-5" class="btn btn-warning">image details</a></li>
            <li><a href="#tabs-6" class="btn btn-warning">booked rooms</a></li>
            <li><a href="#tabs-7" class="btn btn-warning">available rooms</a></li>
        </ul>
          <div id="tabs-1">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>customer id</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>email</th>
                        <th>phno</th>
                        <th>city</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cname='cid';
                    $tname='customers';
                        $query="SELECT * FROM customers";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phno']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                       </tr>
                    <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>     
        </div>
        <div id="tabs-2">
            <p> <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>bookid id</th>
                        <th>arrival date</th>
                        <th>arrival time</th>
                        <th>checkout date</th>
                        <th>checkout time</th>
                        <th>no of people</th>
                        <th>roomno</th>
                        <th>roomtype</th>
                        <th>customer id</th>
                        <th>book time</th>
                        <th colspan="2">operations</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                    $cname='bid';
                    $tname='tblbook';
                        $query="SELECT * FROM tblbook";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                        <td><?php echo $row['bid']; ?></td>
                        <td><?php echo $row['arrdate']; ?></td>
                        <td><?php echo $row['arrtime']; ?></td>
                        <td><?php echo $row['checkoutdate']; ?></td>
                        <td><?php echo $row['checkouttime']; ?></td>
                        <td><?php echo $row['no_of_people']; ?></td>
                        <td><?php echo $row['roomno']; ?></td>
                        <td><?php echo $row['roomtype']; ?></td>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['booktime']; ?></td>
                        <td><a href="editb.php?id=<?php echo $row['bid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>">edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['bid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>" onclick="return confirm('are your sure to delete <?php echo $row['bid']; ?>')">delete</a></td>
                    </tr>
                    <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>      
        </div>
        <div id="tabs-3">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>cancellation id</th>
                        <th>customer id</th>
                        <th>booking id</th>
                        <th>cancel time</th>
                        
                        <th>operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cname='canid';
                    $tname='tblcancellation';
                        $query="SELECT * FROM tblcancellation";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                        <td><?php echo $row['can']; ?></td>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['bid']; ?></td>
                        <td><?php echo $row['canceltime']; ?></td>
                          <td><a href="delete.php?id=<?php echo $row['canid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>" onclick="return confirm('are your sure to delete <?php echo $row['canid']; ?>')">delete</a></td>
                    
                        
                       </tr>
                    <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>      
        </div>
        <div id="tabs-4">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>room id</th>
                        <th>room no</th>
                        <th>room type</th>
                        <th>max person</th>
                        <th>price per day</th>
                        <th>locked</th>
                        <th colspan="2">operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cname='roomid';
                    $tname='tblroom';
                        $query="SELECT * FROM tblroom";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                        <td><?php echo $row['rid']; ?></td>
                       <td><?php echo $row['roomid']; ?></td>
                        <td><?php echo $row['roomtype']; ?></td>
                        <td><?php echo $row['maxperson']; ?></td>
                        <td><?php echo $row['priceperday']; ?></td>
                        <td><?php echo $row['locked']; ?></td>
                        <td><a href="editroom.php?id=<?php echo $row['rid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>">edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['rid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>" onclick="return confirm('are your sure to delete <?php echo $row['roomid']; ?>')">delete</a></td>
                    
                    </tr>
                     <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>      
        </div>
        <div id="tabs-5">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>image id</th>
                        <th>folder</th>
                        <th>image name</th>
                        <th>size</th>
                        
                        <th colspan="2">operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cname='imageid';
                    $tname='tblimage';
                        $query="SELECT * FROM tblimage";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                       <td><?php echo $row['imageid']; ?></td>
                        <td><?php echo $row['folder']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['size']; ?></td>
                        <td><a href="editi.php?id=<?php echo $row['imageid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>">edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['imageid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>" onclick="return confirm('are your sure to delete <?php echo $row['imageid']; ?>')">delete</a></td>
                    
                    </tr>
                     <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>      
        </div>
        <div id="tabs-6">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>room id</th>
                        <th>roomtype</th>
                        <th>max person</th>
                        <th>price per day</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cname='roomid';
                    $tname='tblroom';
                        $query="SELECT * FROM tblroom WHERE locked='Y'";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                       <td><?php echo $row['roomid']; ?></td>
                        <td><?php echo $row['roomtype']; ?></td>
                        <td><?php echo $row['maxperson']; ?></td>
                        <td><?php echo $row['priceperday']; ?></td>
                       
                         
                    </tr>
                     <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>  
        </div>
        <div id="tabs-7">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>room id</th>
                        <th>roomtype</th>
                        <th>max person</th>
                        <th>price per day</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cname='roomid';
                    $tname='tblroom';
                        $query="SELECT * FROM tblroom WHERE locked='N'";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                while($row= mysqli_fetch_assoc($result))
                                {
                        
                    ?>
                    <tr>
                       <td><?php echo $row['roomid']; ?></td>
                        <td><?php echo $row['roomtype']; ?></td>
                        <td><?php echo $row['maxperson']; ?></td>
                        <td><?php echo $row['priceperday']; ?></td>
                       
                         
                    </tr>
                     <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>      
        </div>
        <table class="table table-bordered">
 
            <tbody>
                <tr>
                    <td>Insert Room Details</td>
                    <td>Insert Image Details</td>
                    
                </tr>
                <tr>
                    <td><a href='insertroom.php' class="btn btn-warning" >insert room</a></td>
                    <td><a href='insertimage.php' class="btn btn-warning" >insert image</a></td>
                </tr>
            </tbody>
        </table>

      
</body>
    </html>