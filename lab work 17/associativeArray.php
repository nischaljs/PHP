<?php 
$students = [
    "Alice" =>85,
    "Nishan" =>23,
    "Nischal"=>21,
    "Manish" =>32
];


$totalGrades =0;


foreach($students as $name =>$grade){
    echo "$name : $grade <br>";
    $totalGrades+=$grade;
}


$average = $totalGrades/count($students);

echo "The average marks obtained is $average";


?>