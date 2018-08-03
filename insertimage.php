<?php
	include './header1.php';
?>
<html>
    <head>
        
    </head>
    <body>
         <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">image insertion</h2>
    </div>
        <form action="inimage.php" method="post">
            <table class="table table-bordered table-responsive table-condensed">
                
                <tbody>
                    <tr>
                        <td>image folder</td>
                        <td><input type="text" name="folder" value="" /></td>
                    </tr>
                    <tr>
                        <td>image name</td>
                        <td><input type="text" name="name" value="" /></td>
                    </tr>
                    <tr>
                        <td>image size</td>
                        <td><input type="text" name="size" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-warning" value="insert" /></td>
                        <td><input type="reset" class="btn btn-danger" value="clear" /></td>
                    </tr>
                    
                </tbody>
            </table>

        </form>
    </body>
</html>