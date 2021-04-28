<?php

// get => $_GET
// post => $_POST

if (count($_POST)) {
    
    echo 'FirstName: ' . $_POST['firstname'];
    echo '<br>';
    
    echo 'LastName: ' . $_POST['lastname'];
    echo '<br>';
    
    $age = $_POST['age'];
    if($age > 100){
        echo 'سن وارد شده خیلی زیاد هست';
        echo '<br>';
    }
    else{
        echo 'Age: ' . $_POST['age'];
        echo '<br>';
    }
    
    echo 'Gender: ' . $_POST['gender'];
    echo '<br>';
    
}

