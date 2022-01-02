<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hike sing up</title>
    <link rel="stylesheet" href="../CSS/singup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>

<body>
    <!--ber start-->
    <div class="navber">
        <!--logo start-->
        <a href="../Home.php">
            <img src="../images/logoo.png" alt="logo" class="logo" />
        </a>
        <!--logo end-->
        <!--nav start-->
        <nav class="nav-links">
            <ul class="nav-links">
                <li>
                    <a href="../SubPages/aboutus.php">About us</a>
                </li>
            </ul>
        </nav>
        <!--nav end-->
    </div>
    <!--ber end -->

    <div class="container">
        <!--TITLE START-->
        <div class="title">Registration</div>
        <!--TITLE END-->

        <!--FORM START-->
        <form action="../Inc/signup.inc.php" method="POST">
            <!--DATA ENTRY START-->
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" name="name" />
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your username" name="username" />
                </div>
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" placeholder="Enter your e-mail" name="email" />
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="pass1" />
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your password" name="pass2" />
                </div>
            </div>
            <!--DATA ENTRY END-->

            <!--REGISTER BUTTON START-->
            <div class="button">
                <input type="submit" name="submit" value="Create Account" />
            </div>
            <!--REGISTER BUTTON END-->
            <div class="signupBottom">
                <a href="./login.php">You have signup!</a>
            </div>
        </form>
        <!--FORM END-->

        <?php

        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyinput"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Fill in all fields!<p>";
          }
          elseif($_GET["error"] == "invaliduid"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Choose a proper username!<p>";
          }
          elseif($_GET["error"] == "invalidemail"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Choose a proper email!<p>";
          }
          elseif($_GET["error"] == "passwordsdontmatch"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Passwords doesn't match!<p>";
          }
          elseif($_GET["error"] == "stmtfailed"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Something went wrong, try again!<p>";
          }
          elseif($_GET["error"] == "usernametaken"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Username already taken!<p>";
          }
          elseif($_GET["error"] == "emailtaken"){
            echo "<p class='errorSignup'> <i class='fas fa-times'></i> Email already taken!<p>";
          }
          elseif($_GET["error"] == "none"){
            echo "<p class='errorSignup'> <i class='fas fa-check'></i> You sign up was successful!<p>";
          }
        }
        ?>
    </div>
</body>

</html>