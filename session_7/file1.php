<?php
session_start();

$_SESSION['key_1'] = 'value_1';


echo 'file_1';
echo '<br>';

echo $_SESSION['key_1'];


