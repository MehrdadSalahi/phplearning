<!DOCTYPE html>
<html>
    <head>
        <title>Session 5</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <script type="text/javascript" src="../js/bootstrap.js" language="javascript"></script>
    </head>
    <body>
        <div class="panel panel-primary">
            <div class="panel-heading">
                ورود کاربر
            </div>
            <div class="panel-body">
                <form method="post" action="check.php">
                    <label>نام کاربری</label>
                    <input type="text" name="username" placeholder="Username" class="form-control"/>
                    <br>
                    
                    <label>رمز عبور</label>
                    <input type="password" name="password" placeholder="Password"  class="form-control"/>
                    <br>
                    
                    <input type="submit" name="btnSend" value="Login"  class="btn btn-warning"/>
                </form>
            </div>
        </div>
    </body>
</html>