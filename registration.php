<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/store.css">
    <title>Online-Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .container{
            position: relative;
            height : 50vh;
            background-image: url('img/login.jpg'); 
            background-repeat: no-repeat;
            background-size: cover; 
        }
        
    </style>
</head>
<body>
<div class="container">
    <!-- here we the code for the Navigation Bar. -->
    <div class="navbar">
        <a href="home.php"><img src="img/logo.png" alt="Harnikky Logo" width="70px"></a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </div>

    <div class="loginHeading">
        <h2>Registration<i class="fa fa-address-book" aria-hidden="true"></i></h2>
    </div>

    <div class="headline">
        <h3>Kindly Login to your Account.</h3>
    </div>
    
    <div class="fcontainer">
        <div class="title">Kindly Login to your Account.</div>
        <form action="index.php">
            <div class="user-details">
                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <label for="fullname">Full Name:</label><br>
                    <input type="text" name="fullname" placeholder="Enter your name" required>
                </div>
            </div>
        </form>
    </div>

    <div class="footer">
        <h4>Copyright © 2020 - <?php echo date("Y")?>. Amospelumi</h4>
    </div>
</div>
    
</body>
</html>
