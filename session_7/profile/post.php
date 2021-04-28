<?php
session_start();

if(!isset($_SESSION['UserID'])){
    header("Location: ..\index.php");
}
?>

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
                Post
            </div>
            <div>
                This page is 'Post'
                <br>
                <a href="home.php" class="btn btn-primary">Home Page</a>
                <br>
                <a href="post.php" class="btn btn-success">Post</a>
                
            </div>
        </div>
    </body>
</html>
