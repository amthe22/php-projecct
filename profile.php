<!DOCTYPE html>
<?php
    require './db.php';
    include './header1.php';
?>
<html lang="en">
  <head>
      <script>
            
      </script>
    
   
  </head>
  <body>

    <div class="container-fluid" >
        
	<div class="row" >
		<div class="col-md-12" >
                    <div class="col-md-12 w3l_about_bottom_left">
		
                        <img src="image/i3.jpg" alt="" class="img-responsive" />
			<div class="w3l_about_bottom_left_video book-text">
				<h4>Hello <?php echo $_SESSION['username'];?></h4>
			</div>
		</div>
			<div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">Profile</h2>
    </div>
			 <table class="table table-bordered table-striped">
                
                
                <tbody>
                    <?php
                    
                    $cname='cid';
                    $tname='customers';
					$cid=$_SESSION['cid'];
                        $query="SELECT * FROM customers WHERE cid=$cid";
                        $result= mysqli_query($con, $query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                $row= mysqli_fetch_assoc($result);
                                
                        
                    ?>
                    
                    <tr>
                        <td>first name</td>
                        <td><?php echo $row['fname']; ?></td>
                    </tr>
                    <tr>
                        <td>last name</td>
                        <td><?php echo $row['lname']; ?></td>
                    </tr>
                    <tr>
                        <td>email address</td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                        <td>phone number</td>
                        <td><?php echo $row['phno']; ?></td>
                    </tr>
                    <tr>
                        <td>city</td>
                        <td><?php echo $row['city']; ?></td>
                    </tr>
                    <?php
                    $cid=$row['cid'];
                                }
                            }
                        
                        
                    ?>
                </tbody>
            </table>     
                    <a href="editc.php?id=<?php echo $cid; ?>" class="btn btn-primary">update profile</a>
       
		</div>
	</div>
	<div class="row">
		
		<div class="col-md-12">
			<div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">Bookings</h2>
    </div>
			<table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>bookid id</th>
                        <th>arrival date</th>
                        <th>arrival time</th>
                        <th>checkout date</th>
                        <th>checkout time</th>
                        <th>no of people</th>
                        
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
                        $query="SELECT * FROM tblbook WHERE cid=$cid";
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
                        
                        <td><?php echo $row['roomtype']; ?></td>
                        <td><?php echo $row['cid']; ?></td>
                        <td><?php echo $row['booktime']; ?></td>
                        <td><a href="editbp.php?id=<?php echo $row['bid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>">edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['bid']; ?>&cname=<?php echo $cname ;?>&tname=<?php echo $tname; ?>" onclick="return confirm('are your sure to delete <?php echo $row['bid']; ?>')">cancel</a></td>
                    </tr>
                    <?php
                                }
                            }
                        }
                        
                    ?>
                </tbody>
            </table>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>