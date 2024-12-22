<?php

    function calculateCircleArea($radius){
        if($radius<0){
            return "Radius must be positive";
        }
        else{
            return pi() * pow($radius,2);
        }
    }

    $testRadis = [1,-2,3,45];

    foreach($testRadis as $radis){
        echo "Radius : $radis , Area :" , calculateCircleArea($radis) . " <br>";
    }
?>