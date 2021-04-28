<?php
$conn = mysqli_connect('localhost', 'root', '') or die("Can't connect database");
$db = mysqli_select_db($conn, 'test') or die("Can't find database");
mysqli_query($conn, "set names 'utf8'");

$query = "INSERT INTO users (`users`.`FirstName`, `users`.`LastName`, `users`.`Age`, `users`.`Gender`) 
	VALUES ('Mehrnaz', 'SamadPour', 22, 'زن')";

$result = mysqli_query($conn, $query);
$ret = mysqli_affected_rows($conn);

if($ret){
    echo 'Record Inserted!';
}
else{
    echo 'Failed!!!';
}

