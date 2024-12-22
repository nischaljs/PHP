<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['name'] = $_POST['name'];


        setcookie('name',$_POST['name'], time()+(7*24*60*60));
        header("Location" . $_SERVER['PHP_SELF']);

        exit();
    }



    if(isset($_COOKIE['name'])){
        echo "Welcome back " . htmlspecialchars($_COOKIE['name']) . " It's great to see you again";

    }else if(isset($_SESSION['name'])){
        echo "Hello " .htmlspecialchars($_SESSION['name']) ." !!";
    }
    else{
        echo '<form method="POST">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
      </form>';
    }
?>