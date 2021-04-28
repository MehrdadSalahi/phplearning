<?php
$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'test');
mysqli_query($conn, 'SET NAMES "utf8"');

$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Session 6</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script type="text/javascript" src="js/bootstrap.js" language="javascript"></script>
    </head>
    <body>
        <div class="panel panel-primary">
            <div class="panel-heading">
                فرم مشخصات فرد
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Row</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Age</td>
                            <td>Gender</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $i . '</td>';
                                echo '<td>' . $row['FirstName'] . '</td>';
                                echo '<td>' . $row['LastName'] . '</td>';
                                echo '<td>' . $row['Age'] . '</td>';
                                echo '<td>' . $row['Gender'] . '</td>';
                                echo '</tr>';
                                
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>