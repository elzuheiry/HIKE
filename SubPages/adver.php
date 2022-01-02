<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/advertis.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!--icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />
    <title>Advertisement</title>
</head>

<body>
    <!--ber start-->
    <div class="navber">
        <!--logo start-->
        <a href="../Home.php">
            <img src="../images/logoo.png" alt="logo" class="logo">
        </a>
        <!--logo end-->
        <!--nav start-->
        <nav class="nav-links">
            <ul class="nav-links">
                <li>
                    <a href="./aboutus.php">About us</a>
                </li>
            </ul>
        </nav>
        <!--nav end-->
    </div>
    <!--ber end -->
    <div class="container">
        <!--TITLE START-->
        <div class="title">
            Add your Advertising
        </div>
        <!--TITLE END-->
        <!--FORM START-->
        <form action="../Inc/adver.inc.php" method="POST">
            <!--DATA ENTRY START-->
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" name="fullName" placeholder="Enter your name">
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter your Address">
                </div>
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" name="email" placeholder="Enter your e-mail">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="phone" placeholder="Enter your number">
                </div>
                <div class="input-box">
                    <span class="details">Product name</span>
                    <input type="text" name="productName" placeholder="Enter your product name">
                </div>
                <div class="input-box">
                    <span class="details">Type product name</span>
                    <input type="text" name="typeProduct" placeholder="Enter your type product name">
                </div>
                <div class="input-box">
                    <span class="details">Announcement start date</span>
                    <input type="text" name="startDate" placeholder="Confirm your starting date">
                </div>
                <div class="input-box">
                    <span class="details">Ad expiration date</span>
                    <input type="text" name="endDate" placeholder="Confirm your end date">
                </div>
            </div>
            <!--DATA ENTRY END-->


            <!--REGISTER AD BUTTON START-->
            <div class="button">
                <input type="Submit" name="submit" value="Register AD">
            </div>
            <!--REGISTER AD BUTTON END-->
            <!--socials icons start-->
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <!--socials icons end -->
        </form>
        <!--FORM END-->
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p id='errorAdver'> <i class='fas fa-times'></i> Fill in all fields!<p>";
            }
            elseif($_GET["error"] == "emailtaken"){
                echo "<p id='errorAdver'> <i class='fas fa-times'></i> Email already taken!<p>";
            }
            elseif($_GET["error"] == "phonetaken"){
                echo "<p id='errorAdver'> <i class='fas fa-times'></i> Phone already taken!<p>";
            }
            elseif($_GET["error"] == "stmtfailed"){
                echo "<p id='errorAdver'> <i class='fas fa-times'></i> Something went wrong, try again!<p>";
            }
            elseif($_GET["error"] == "none"){
                echo "<p id='errorAdver'> <i class='fas fa-check'></i> Successful send!<p>";
            }
        }
        ?>
    </div>
</body>

</html>