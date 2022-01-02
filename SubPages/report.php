<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="../CSS/report.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <!--icons-->
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
            Suggestions and complaints
        </div>
        <!--TITLE END-->
        <!--FORM START-->
        <form action="../Inc/report.inc.php" method="POST">
            <!--DATA ENTRY START-->
            <div class="user-details">
                <div class="input-box">
                    <span class="details">The problem or suggestion</span>
                    <textarea name="report" id="" cols="30" rows="10" placeholder="Put your problem!"></textarea>
                </div>
            </div>
            <!--DATA ENTRY END-->
            <!--REGISTER AD BUTTON START-->
            <div class="button">
                <input type="Submit" name="submit" value="Send">
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
                    echo "<p class='errorReport'> <i class='fas fa-times'></i> Fill in fields!<p>";
                }
                elseif($_GET["error"] == "stmtfailed"){
                    echo "<p class='errorReport'> <i class='fas fa-times'></i> Something went wrong, try again!<p>";
                }
                elseif($_GET["error"] == "none"){
                    echo "<p class='errorReport'> <i class='fas fa-check'></i> Successful send!<p>";
                }
            }
        ?>
    </div>

</body>

</html>