<?php

$a =4;
$b=5;

function calculate_sum (){

    //using global keyword
    global $a,$b;
    echo $a+$b ;
}


function caluclate_diff(){
     //using GLOBALS['var_name];

     echo $GLOBALS['a'] - $GLOBALS['b'];
}

calculate_sum();
echo "<br>";
caluclate_diff();


?>