<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering System</title>

    <style>
        #contact button {
            background: #d92323; 
    color: white;
    border: none;
    padding: 12px 25px;
    font-size: 20px;
    border-radius: 8px;
    cursor: pointer;
    margin-top:60px;
    margin-left:570px;
}

#contact button:hover {
    background: #b71c1c;
}
        
body {
    margin: 0;
    font-family: Arial, sans-serif;
    
}


#navbar {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    align-items: start;
    padding: 15px 30px;
    background: white ;
}


#left-menu {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 5px;
}


#right-menu {
    grid-column: 3;
    display: flex;
    justify-content: flex-end;
    gap: 15px;
}


#navbar button {
    background: #d92323;
    color: white;
    border: none;
    padding: 12px 25px;
    font-size: 18px;
    border-radius: 8px;
    cursor: pointer;
}

#navbar button:hover {
    background: #b71c1c;
}

#gallery-container {
    grid-column: 1 / 5;
    width: 80%;
    margin: 25px auto 0;
    text-align: center;
    overflow: hidden;
}

#gallery-container h1 {
    font-size: 28px;
    margin-bottom: 20px;
}



#gallery {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 18px;
    width: max-content;
    margin: auto;
    animation: moveGallery 15s linear infinite;
}


#gallery img {
    width: 300px;
    height: 220px;
    object-fit: cover;
    border-radius: 10px;
    flex-shrink: 0;
}

@keyframes moveGallery {

    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-40%);
    }

}
h1{
    color:rgb(53, 2, 2)
}
a{
    text-decoration: none;
    color:white;
}
        
    </style>
</head>

<body>

    <div id="navbar">

        <!-- Menu -->
        <div id="left-menu">
            <button id="menu">Menu</button>
            <button><a href="aboutus.php">About Us</a></button>
        </div>

        <!-- Register, Login and Cart  -->
        <div id="right-menu">
            <button id="login"><a href="login.php">Login</a></button>
            <button id="cart">🛒 Cart</button>
        </div>
</div>
     <!-- Food Gallery -->

    <div id="gallery-container">

        <h1>Our Food Gallery</h1>

        <div id="gallery">

            <img src="images/momo.jpg" alt="Momo">
            <img src="images/Chatpate.jpg" alt="Chatpate"> 

            <img src="images/pizza.jpg" alt="Pizza">

            <img src="images/burger.jpg" alt="Burger">

            <img src="images/chomein.jpg" alt="Chowmein">

            <img src="images/keema noodles.jpg" alt="Keema Noodles">
            <img src="images/thukpa.jpg" alt="thukpa"> 

            <img src="images/sausage.jpg" alt="Sausage">

            <img src="images/chicken leg piece.jpg" alt="Chicken leg piece"> 

            <img src="images/momo.jpg" alt="Momo">
            <img src="images/Chatpate.jpg" alt="Chatpate"> 

            <img src="images/pizza.jpg" alt="Pizza">

            <img src="images/burger.jpg" alt="Burger">

            <img src="images/chomein.jpg" alt="Chowmein">

            <img src="images/keema noodles.jpg" alt="Keema Noodles">
            <img src="images/thukpa.jpg" alt="thukpa"> 

            <img src="images/sausage.jpg" alt="Sausage">

            <img src="images/chicken leg piece.jpg" alt="Chicken leg piece">    
</div></div>
          <div id="contact">
            <button><a href="contactus.php">Contact Us</a></button>
</body>
</html>