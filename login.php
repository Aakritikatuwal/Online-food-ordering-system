<?php

session_start();

include "./database.php";

$message = "";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customer WHERE name = '$username'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {

        die("Database Error: " . mysqli_error($conn));

    }

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];

            header("Location: index.php");
            exit;

        } else {

            $message = "Invalid password.";

        }

    } else {

        $message = "Username not found.";

    }

}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
   
}


#login {
    width: 350px;
    margin: 100px auto;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-sizing: border-box;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}


label {
    font-size: 17px;
    font-weight: bold;
    color: rgb(53, 2, 2);
}


input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}


input[type="submit"] {
    width: 100%;
    padding: 12px;
    background: #d92323;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 17px;
    cursor: pointer;
}


input[type="submit"]:hover {
    background: #b71c1c;
}
a{
    text-decoration: none;
   color:#b71c1c;
}
    </style>
</head>
<body>
    <div id="login">

    <h2>Login</h2>

    <?php
        if ($message != "") {
            echo "<p style='color:red;'>$message</p>";
        }
    ?>

    <form method="POST" action="">

        <label>Name</label><br>
        <input type="text" placeholder="name" name="username" required>
        <br><br>

        <label>Password</label><br>
        <input type="password" placeholder="Password" name="password" required>
        <br><br>

        <input type="submit" value="Login" name="submit">

    </form>

    <p>
        Don't have an account?
        <a href="register.php">Register</a>
    </p>

</div>
    
</body>
</html>