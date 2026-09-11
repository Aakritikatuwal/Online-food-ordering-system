<?php
include "./database.php";
if(isset($_POST['submit'])){
$name = $_POST['name'];

$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$phone_number=$_POST['phone'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


     $sql = "INSERT INTO customer (name, email, password,address,phone)
                VALUES('$name','$email', '$hashedPassword', '$address','$phone_number')";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "<script>
            alert ('User registered successfully.');
            </script>";
        } else {
            echo "<script> alert ('User registration failed.');
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
.form-container {
    width: 350px;
    margin: 40px auto;
    padding: 30px 35px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}
.form-container h2 {
    text-align: center;
    color: rgb(53, 2, 2);
    margin-bottom: 25px;
}

.form-container label {
    display: block;
    margin-bottom: 7px;
    color: rgb(53, 2, 2);
    font-weight: bold;
}

.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="password"],
.form-container input[type="number"],
.form-container input[type="tel"],
.form-container input[type="date"],
.form-container textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    font-size: 14px;
}

.form-container textarea {
    height: 90px;
    resize: vertical;
}

.form-container input:focus,
.form-container textarea:focus {
    outline: none;
    border: 2px solid #d92323;
}

.form-container input[type="submit"] {
    width: 100%;
    padding: 13px;
    background: #d92323;
    color: white;
    border: none;
    border-radius: 7px;
    font-size: 18px;
    cursor: pointer;
}

.form-container input[type="submit"]:hover {
    background: #b71c1c;
}

.form-container a {
    color: #d92323;
    text-decoration: none;
    font-weight: bold;
}

.form-container a:hover {
    text-decoration: underline;
}
</style>
<body>
<div class="form-container">

    <h2>Register</h2>
 

    <form action="#" id="registerForm" method="POST">

        <label>Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">

        <label>Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">

        <label>Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password">

        <label>Phone:</label>
        <input type="tel" id="phone"name="phone" placeholder="Enter phone number">

        <label>Address:</label>
        <textarea id="address"name="address" placeholder="Enter your address"></textarea>

        <input id ="submit" type="submit" name="submit" value="Register">
        <p>Already have an account? <a href="login.php">login</a></p>

    </form>
</div>
<script>
document.getElementById("registerForm").addEventListener("submit", function(event) {

    let name = document.querySelector("[name='name']").value.trim();
    let username = document.querySelector("[name='username']").value.trim();
    let email = document.querySelector("[name='email']").value.trim();
    let password = document.querySelector("[name='password']").value;
    let phone = document.querySelector("[name='phone']").value.trim();
    let address = document.querySelector("[name='address']").value.trim();

    // Name validation
    if (name === "") {
        alert("Please enter your name.");
        event.preventDefault();
        return;
    }

    if (!/^[A-Za-z ]+$/.test(name)) {
        alert("Name should contain only letters.");
        event.preventDefault();
        return;
    }


    // Email validation
    if (email === "") {
        alert("Please enter your email.");
        event.preventDefault();
        return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Please enter a valid email.");
        event.preventDefault();
        return;
    }

    // Password validation
    if (password === "") {
        alert("Please enter a password.");
        event.preventDefault();
        return;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        event.preventDefault();
        return;
    }

    // Phone validation
    if (!/^[0-9]{10}$/.test(phone)) {
        alert("Phone number must contain exactly 10 digits.");
        event.preventDefault();
        return;
    }

    // Address validation
    if (address === "") {
        alert("Please enter your address.");
        event.preventDefault();
        return;
    }

    alert("Registration successful!");
});
</script>
</body>
</html>