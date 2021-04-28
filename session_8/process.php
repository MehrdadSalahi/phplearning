<?php

$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'test');
mysqli_query($conn, 'SET NAMES "utf8"');

if(count($_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    $query = "INSERT INTO users (`users`.`FirstName`, `users`.`LastName`, `users`.`Age`, `users`.`Gender`) 
	VALUES ('".$firstname."', '".$lastname."', ".$age.", '".$gender."')";

    $result = mysqli_query($conn, $query);
    $ret = mysqli_affected_rows($conn);
    
    if($ret){
        echo "Record Inserted!!!!";
    }
    else{
        echo "Failed!!!";
    }
}
