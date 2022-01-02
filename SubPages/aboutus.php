<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="../CSS/About us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
                <?php 
                        
                    if(isset($_SESSION["useruid"])){
                        echo "<li><a href=''><i class='far fa-user-circle'></i></a></li>";
                        echo "<li>
                                <a href=''>Hello There ". $_SESSION["userufullname"] ."<a/>
                                <a href=''>USERNAME: ". $_SESSION["useruid"] ."<a/>
                            <li/>";
                        echo "<li><a href='../Inc/logOut.inc.php'>Log Out</a></li>";
                    }else{
                        echo "<li><a href='../signIn/signup.php'>Sign Up</a></li>";
                        echo "<li><a href='../signIn/login.php'>Sign In</a></li>";
                    }

                ?>
            </ul>
        </nav>
        <!--nav end-->
    </div>
    <!--ber end -->

    <!--search box start-->
    <div class="search-box-cover">
        <!-- <h2 class="title-cover">where do you want to go?</h2>
        <div class="search-box">
            <table class="sb-container">
                <tr>
                    <td>
                        <input type="text" placeholder="Search" class="search-txt">
                    </td>
                    <td>
                        <a href="#" class="search-btn">
                            <i class="fas fa-search" href="search"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div> -->
    </div>
    <!--search box end-->

    <!--container start-->
    <div class="container">
        <h2>Why was the site created?</h2>
        <br>
        <p>
            Egypt is one of the most prominent tourist countries in the world, as it is characterized by the most
            beautiful tourist areas,
            and tourism is an important national income source for Egypt, so we will work to build a website that
            includes the most important
            tourist places,especially rare places and ways to access them, and we will provide sufficient information
            about those places so that
            we attract the largest There are a number of users to visit it, so we will do our best through this website
            to guide you to these tourist places.
        </p>
        <br>
        <br>
        <h2>Site goals:</h2>
        <br>
        <p>
            1. Create a tourist site with good information and good design.
            <br>
            2. Advertising for tourist places in Egypt.
            <br>
            3. Provide a 24-hour service.
            <br>
            4. Provide a picture of the tourist places of the world.
            <br>
            5. Create an easy site to deal with.
            <br>
            6. Fetching advertisements for the site.
            <br>
            7. Dividing the site according to its purpose into therapeutic, recreational, historical, Coptic and Islamic
            tourism.
            <br>
            8. Provide the user with a set of options to plan the trip and provide some advice.
        </p>
    </div>
    <!--container start-->
    <!--footer strat-->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-sec-Connectus">
                <div class="logo-hike">
                    <img src="images/logoo.png" alt="" class="footer-logo">
                    <!--
                        <h1>Hike</h1>
                        -->
                </div>
                <a href="./contactUs.php"> Connect us </a>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>

                <div class="mail-phone">
                    <span><i class="fas fa-phone"></i> &nbsp;123-456-789</span>
                    <span><i class="fas fa-envelope"></i> &nbsp;info@Hike.com</span>
                </div>
            </div>
            <div class="footer-bottom">
                &copy;codingpoets.com | Designed by A.S
            </div>
        </div>
        <!--footer end -->
</body>

</html>