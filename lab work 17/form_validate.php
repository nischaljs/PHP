<?php
$validPassword = '123';
$validusername = 'nischal108';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $validusername && $password == $validPassword) {
        $message = 'Login Successful';
    } else {
        $message = 'Login failed';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <?php
    if ($message) {

        echo "<p>$message </p>";
    }


    ?>

    <form action="" method="post">

        <label for="username">
            Enter your username
        </label>
        <input type="text" name="username" id="">
        <label for="password">Enter your password</label>
        <input type="password" name="password" id="">
        <button type="submit">Login</button>
    </form>
</body>

</html>