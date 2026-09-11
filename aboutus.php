<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us</title>

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

        #navbar button {
            background: #d92323;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            margin-right: 10px;
            cursor: pointer;
        }

        #navbar button:hover {
            background: #b71c1c;
        }

        #navbar a {
            text-decoration: none;
            color: white;
            font-size: 16px;
        }


        /* About Section */

        .about-container {
            width: 70%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
        }

        .about-container h1 {
            color: #d92323;
        }

        .about-container h2 {
            color: rgb(53, 2, 2);
        }

        .about-container p {
            font-size: 17px;
            line-height: 1.6;
            color: #444;
        }

        .about-container ul {
            text-align: left;
            display: inline-block;
            line-height: 2;
        }

    </style>

</head>

<body>


    <!-- Navbar -->

    <div id="navbar">

        <button>
            <a href="index.php">Home</a>
        </button>
    </div>


    <!-- About Us -->

    <div class="about-container">

        <h1>About Us</h1>

        <p>
            Welcome to our Online Food Ordering System. We make it easy
            for customers to order their favourite food online.
        </p>

        <p>
            Our goal is to provide delicious food with a simple and
            convenient ordering experience. Customers can explore
            different food items and place their orders easily.
        </p>


        <h2>Our Mission</h2>

        <p>
            Our mission is to provide quality food and fast service
            to our customers.
        </p>


        <h2>Why Choose Us?</h2>
        <ul>
            <li>Easy online food ordering</li>
            <li>Delicious and fresh food</li>
            <li>Simple and user-friendly system</li>
            <li>Fast and convenient service</li>
        </ul>
        <h2>Thank You</h2>
        <p>
            Thank you for choosing our Online Food Ordering System.
            We hope you enjoy your favourite food!
        </p>

    </div>


</body>
</html>