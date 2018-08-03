<?php
    require './header1.php';
    
?>
<html>
    <head>
        
    </head>
    <body>
    <div class="inner-agile-w3l-part-head">
        <h2 class="w3l-inner-h-title">room insertion</h2>
    </div>
        <form action="inroom.php" method="POST">
            <table class="table table-bordered table-striped">
                
                <tbody>
                     <tr>
                        <td>room no</td>
                        <td><input type="text" name="roomno" class="form-control" value="" required/></td>
                    </tr>
                    <tr>
                        <td>roomtype</td>
                        <td><input type="text" name="roomtype" class="form-control" value="" required/></td>
                    </tr>
                    <tr>
                        <td>max person</td>
                        <td><input type="text" name="maxperson" class="form-control" value="" required/></td>
                    </tr>
                    <tr>
                        <td>price per day</td>
                        <td><input type="text" name="priceperday" class="form-control" value="" required/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-warning" value="insert"/></td>
                        <td><input type="submit" class="btn btn-danger"value="clear" /></td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
