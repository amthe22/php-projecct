<?php
require './db.php';
include './header1.php'

?>
<html>
    <head>
        <title>edit image</title>
    </head>
    <body>
         <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">Edit image</h2>
    </div>
        <form action="updatei.php" method="POST">
            <table class="table table-bordered table-striped">
                <tbody>
                     <?php
                    $cname='bid';
                    $tname='tblbook';
                    $id=$_REQUEST['id'];
                        $query="SELECT * FROM tblimage WHERE imageid=$id";
                        $result= mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                $row= mysqli_fetch_assoc($result);
                                
                        
                    ?>
                    <tr>
                        <td>folder</td>
                       <td><input type="text" name="folder" class="form-control" value="<?php echo $row['folder']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>image name</td>
                        <td><input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>"/></td>
                    </tr>
                    <tr>
                        <td>image size</td>
                     <td><input type="number" name="size" class="form-control" value="<?php echo $row['size']; ?>"/></td>
                    </tr>
  
                   
                       <input type="hidden" name="imageid" value="<?php echo $row['imageid']; ?>"/>
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