<?php
    $age = 25;
    $hasLicense = true;
    $isEmployed = false;

    echo "<h3>Logical Operators Demonstration</h3>";


    if ($age >= 18 && $hasLicense) {
        echo "You are eligible to drive.<br>";
    } else {
        echo "You are not eligible to drive.<br>";
    }

    if ($age >= 18 || $isEmployed) {
        echo "You are eligible for this benefit.<br>";
    } else {
        echo "You are not eligible for this benefit.<br>";
    }

    if (!$isEmployed) {
        echo "You are currently unemployed.<br>";
    } else {
        echo "You are employed.<br>";
    }


    if ($age >= 18 && $hasLicense && !$isEmployed) {
        echo "You are an adult with a license but currently unemployed.<br>";
    } else {
        echo "Your status does not match the specific criteria.<br>";
    }
    ?>