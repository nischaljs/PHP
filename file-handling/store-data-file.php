<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store data on file</title>
</head>
<body>

<form action="" method="post">
    <label for="name">Enter you name</label>
    <input type="text" name="name" id="name">
    <label for="age">Enter you age</label>
    <input type="number" name="age" id="age">
    <button type="submit">Submit</button>
</form>
    
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST["name"];
    $age=$_POST["age"];
     $file = fopen('demo.txt',"a");
     fwrite($file,"Name :$name, age  :$age \n ");
     fclose($file);
     echo"Registration successfull";



}



?>