<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'Learning');
mysqli_query($conn, 'SET NAMES "utf8"');

if (count($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM `Users` WHERE Username = '".$username."' AND Password = '".$password."'";
    $result = mysqli_query($conn, $query);
    $return = mysqli_fetch_assoc($result);
    
    if(isset($return['UserID'])){
        $_SESSION['UserID'] = $return['UserID'];
        
        header("Location: home.php");
    }
}

?>