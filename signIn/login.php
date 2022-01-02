<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../CSS/login.css" />
    <title>SIGNUP</title>
</head>

<body>
    <header class="l-header">
        <div class="logo">
            <a href="../Home.php">
                <img src="../images/logoo.png" class="img_logo" alt="">
            </a>
        </div>
    </header>

    <div class="dark"></div>

    <div class="l-main">
        <form class="form-login" action="../Inc/login.inc.php" method="POST">
            <h2>Welcome back.</h2>

            <div class="inp-email">
                <label for="">Username</label>
                <input type="text" name="username" placeholder="type here your username" />
            </div>
            <div class="inp-password">
                <label for="">Password</label>
                <input type="password" name="pwd" placeholder="type here your password" />
            </div>

            <div class="link-password">
                <a href="#">Forgot password?</a>
            </div>

            <input type="submit" name="submit" value="login" class="login" />

            <div class="signup">
                <a href="./signup.php">Become a member</a>
            </div>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p class='errorLogin'> <i class='fas fa-times'></i> Fill in all fields!<p>";
                } elseif ($_GET["error"] == "stmtfailed") {
                    echo "<p class='errorLogin'> <i class='fas fa-times'></i> Something went wrong, try again!<p>";
                } elseif ($_GET["error"] == "wronglogin") {
                    echo "<p class='errorLogin'> <i class='fas fa-check'></i> Incorrect login information!<p>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>