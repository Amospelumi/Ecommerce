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
    
        <form action="index.php">
            <table>
                <tr>
                    <td>
                        <label for="fname">First Name:</label><br>
                        <input type="text" name="fullname" placeholder="Enter your First name" required><br>
                    </td>

                    <td>
                        <label for="lname">Last Name:</label><br>
                        <input type="text" name="lname" placeholder="Enter your Last name" required><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="Telephone">Telephone:</label><br>
                        <input type="text" name="telephone" placeholder="09012345667" required><br>
                    </td>

                    <td>
                        <label for="gender">Gender:</label><br>
                        <select name="gender" id="gender">
                            <option value="Select your Gender">Select your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select><br>
                    </td>
                </tr>
                    
                <tr>
                    <td>
                        <label for="address">Address:</label><br>
                        <input type="text" name="address" placeholder="fill your address"><br>
                    </td>

                    <td>
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" placeholder="Enter your password" required><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="email-address">Email-Address:</label><br>
                        <input type="text" name="email" placeholder="Enter your email" required><br>
                    </td>
                    <td>
                        <label for="confpass">Confirm Password:</label><br>
                        <input type="password" name="confpass" placeholder="Confirm your password" required><br>
                    </td><br><br>
                </tr>
                <tr>
                    <td><input type="submit" value="Register"></td>
                </tr>

            </table>
                
        </form>
    </div>

    <!-- <div class="footer">
        <h4>Copyright © 2020 - <?php echo date("Y")?>. Amospelumi</h4>
    </div> -->
</div>
    
</body>
</html>
