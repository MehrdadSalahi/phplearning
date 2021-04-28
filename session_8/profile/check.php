<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'Learning');
mysqli_query($conn, 'SET NAMES "utf8"');

if (count($_POST)){
    
    if(!is_null($_POST['username']) || !isset($_POST['username'])){
        $username = $_POST['username'];
    }
    
    if(!is_null($_POST['password']) || !isset($_POST['password'])){
        $password = $_POST['password'];
    }
    
    if(!empty($username) && !empty($password)){
        
        $query = "SELECT * FROM `Users` WHERE Username = '".$username."' AND Password = '".md5($password)."'";
        
        $result = mysqli_query($conn, $query);
        $return = mysqli_fetch_assoc($result);

        if(isset($return['UserID'])){
            $_SESSION['UserID'] = $return['UserID'];

            header("Location: home.php");
        }
    }
    else{
        echo 'Username or Password is empty!';
    }
}

?>