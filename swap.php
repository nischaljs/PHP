<?php
    $a = 5;
    $b = 6;

    echo "The initial value of a is $a and b is $b.<br>";


    echo "Performing the swap...<br>";
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;


    echo "After swapping, the value of a is $a and b is $b.";
    ?>