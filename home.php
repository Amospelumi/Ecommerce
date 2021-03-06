<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/store.css">
    <title>Online-Store</title>

    <style>
        body{
            position: relative;
            height: 100vh;
            background-image: linear-gradient(#DA1396, #da139475), url('img/bg.jpeg'); 
            background-repeat: no-repeat;
            background-size: cover; 
        }
        
        
    </style>
</head>
<body>
<div class="container"></div>
    <!-- here we the code for the Navigation Bar. -->
    <div class="navbar">
        <a href="home.php"><img src="img/logo.png" alt="Harnikky Logo" width="70px"></a>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </div>

    <div class="welcome">
        <h1>WELCOME TO HARNIKKY <br> FASHION STORE.</h1>
        <p>... home of fashion</p>
        <a href="login.php"><button type="button">Shop Now</button></a>
    </div>

    <!-- <div class="footer">
        <h4>Copyright © 2020 - <?php echo date("Y")?>. Amospelumi</h4>
    </div> -->
    
</body>
</html>