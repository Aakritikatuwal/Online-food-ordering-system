<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $sql="INSERT INTO customer_feedback (name,email,feedback) VALUES
    ('$name','$email','$feedback')";
    $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "<script>
            alert ('Feedback submitted successfully.');
            </script>";
        } else {
            echo "<script> alert ('Feedback submission failed.');
            </script>";
        }
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us</title>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: rgb(204, 173, 115);
        }

        /* Navbar */
        #navbar {
            background: white;
            padding: 15px 30px;
        }

        #navbar a {
            text-decoration: none;
            background: #d92323;
            color: white;
            padding: 12px 20px;
            margin-right: 10px;
            border-radius: 8px;
        }

        .contact-container {
            width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            text-align: center;
            box-sizing: border-box;
        }

        h1 {
            color: #d92323;
        }

        p {
            font-size: 16px;
            color: #444;
            line-height: 1.6;
        }

        .contact-info {
            text-align: left;
            margin-top: 25px;
        }

        .contact-info p {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

       
        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background: #d92323;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #b71c1c;
        }

    </style>
</head>

<body>

    <!-- Navbar -->

    <div id="navbar">
        <a href="index.html">Home</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact Us</a>
    </div>


    <!-- Contact Section -->

    <div class="contact-container">

        <h1>Contact Us</h1>

        <p>
            We would love to hear from you! If you have any questions,
            suggestions, or feedback, please contact us.
        </p>


        <div class="contact-info">

            <p><b>Email:</b> foodie@gmail.com</p>

            <p><b>Phone:</b> +977 9812345678</p>

            <p><b>Address:</b> Kathmandu, Nepal</p>

            <p><b>Opening Hours:</b> 9:00 AM - 9:00 PM</p>

        </div>


        <h2>Send Us a Message</h2>

        <form method="POST" action="#">

            <input type="text" placeholder="Enter your name" name="name">

            <input type="email" placeholder="Enter your email" name="email">

            <textarea placeholder="Enter your message" name="feedback"></textarea>

            <input type="submit" value="Send Message" name="submit">

        </form>

    </div>

</body>
</html>