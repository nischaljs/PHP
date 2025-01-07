<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    $sql= "INSERT INTO users (name,phone) VALUES ('$name','$phone')";

    if(mysqli_query($conn,$sql)){
        echo "Data inserted into database";
    }
    else{
        echo "Error while insertion" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>