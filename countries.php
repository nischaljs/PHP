<?php

$countries = ["Nepal", "India", "USA", "Canada", "Australia"];

echo "Countries using a for loop:\n";
for ($i = 0; $i < count($countries); $i++) {
    echo $countries[$i] . "\n";
}


echo " <br>Countries using a foreach loop:\n";
foreach ($countries as $country) {
    echo $country . "\n";
}

?>