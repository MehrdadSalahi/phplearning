<?php
    require 'func\func.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Session 5</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script type="text/javascript" src="js/bootstrap.js" language="javascript"></script>
    </head>
    <body>
        <div class="panel panel-primary">
            <div class="panel-heading">
                فرم مشخصات
            </div>
            <div>
                <form method="post" action="process.php">
                    <label>First Name</label>
                    <input type="text" name="firstname" placeholder="First Name" class="form-control"/>
                    <br>

                    <label>Last Name</label>
                    <input type="text" name="lastname" placeholder="Last Name" class="form-control"/>
                    <br>

                    <label>Age</label>
                    <input type="number" name="age" placeholder="Age" class="form-control"/>
                    <br>

                    <select name="gender" class="form-control">
                        <option>مرد</option>
                        <option>زن</option>
                    </select>
                    <br>

                    <input type="submit" name="btnSend" value="Send" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </body>
</html>