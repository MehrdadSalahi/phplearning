<?php
function sum($num1, $num2){    
    return $num1 + $num2;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Session 4</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <script type="text/javascript" src="js/bootstrap.js" language="javascript"></script>
    </head>
    <body>
        <div class="panel panel-danger">
            <div class="panel-heading">
                توابع رشته ای
            </div>
            <div class="panel-body">
                <?php
                    $string = "Hello World";
                    
//                    echo 'Lenght (' . $string . ') : ';
//                    echo strlen($string);
//                    echo '<br>';
//                    echo '---------------------------';
//                    echo '<br>';
//                    
//                    echo 'Replace (' . $string . ') : ';
//                    echo str_replace('World', 'Guys', $string);
//                    echo '<br>';
//                    echo '---------------------------';
//                    echo '<br>';
//                    
//                    echo 'Reverse (' . $string . ') : ';
//                    echo strrev($string);
//                    echo '<br>';
//                    echo '---------------------------';
//                    echo '<br>';
//                    
//                    echo 'Repeat (' . $string . ') : ';
//                    echo str_repeat($string. ' ', 5);
//                    echo '<br>';
                    
                    $array = array(
                        'one', 'two', 'three', 'four', 'five',
                    );
                    
                    echo count($array);
                    
                    //echo '<pre>' . print_r($array, 1) . '</pre>';
                    //sort($array);
                    echo '<pre>' . print_r($array, 1) . '</pre>';
                    
                    $output = implode(' x ', $array);
                    echo '<pre>'. print_r($output, 1) . '</pre>';
                    
                    $output2 = explode("\n", $output);
                    echo '<pre>'. print_r($output2, 1) . '</pre>';
                    
                    
                    
                ?>
            </div>
        </div>
    </body>
</html>