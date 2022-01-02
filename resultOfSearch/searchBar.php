<?php  session_start();

    require_once "../Inc/dbh.inc.php";
    require_once "../Inc/functions.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/medicalTourism.css" />
    <title>Result Of Search</title>
</head>

<body>
    <header class="l-header">
        <div class="logo">
            <h2 class="text-logo">
                <a href="../Home.php"><img class="searchlogo" src="../images/logoo.png" alt=""></a>
            </h2>
        </div>
        <nav class="nav">
            <ul>
                <li>
                    <a href="../SubPages/aboutus.php" class="nav-signin"> about us </a>
                </li>
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
    </header>

    <div class="cover">
        <div class="con-cover">
            <div class="det-cover">
                <h1>make the next one count.</h1>
            </div>
        </div>
    </div>

    <div class="l-main">
        <div class="con-main">
            <h1>Result Of Search!</h1>
            <?php
            if (isset($_GET["submitSearch"])) {
                if (emptyInputSearch($searchBar) !== false) {
                    header("location:" . "../Home.php");
                    exit();
                }
                $search = mysqli_real_escape_string($conn, $_GET["search"]);
                $sql = "SELECT * FROM touristicplaces WHERE tourFullname LIKE '%$search%' OR tourCity LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);
            
                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)){ ?>


            <div class='box-main'>
                <div class='box--main'>
                    <h2 class='box--mainn'><?php echo $row["tourFullname"] ?></h2>
                    <h3 class='pp-1'><?php echo $row["tourCity"] ?></h3>
                    <p class='box--mainnn'><?php echo $row["tourDescription"] ?></p>
                    <button class='button-main'>more details</button>
                </div>
                <div />
                <?php }
                    }else{
                        echo "<h4>There ara no result matching your search!</h4>";
                    } ?>

                <?php }
            ?>
            </div>
        </div>
</body>

</html>