<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $ip_server = $_SERVER['SERVER_ADDR'];
    $name_server = $_SERVER['SERVER_NAME'];
    $software_server = $_SERVER['SERVER_SOFTWARE'];

    echo " ip address : $ip_server <br> server name : $name_server <br>  software name : $software_server";
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>See Server Details</h1>
    <form action="" method="post">
        <button type="submit">See Server Details</button>
    </form>
</body>
</html>