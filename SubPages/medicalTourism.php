<?php 
session_start()
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
    <title>Medical Tourism</title>
</head>

<body>
    <header class="l-header">
        <div class="logo">
            <h2 class="text-logo">
                <a href="../Home.php"><img src="../images/logoo.png" class="img__logo" alt=""></a>
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

    <div class="menu">
        <div class="links">
            <a href="./medicalTourism/Fayoum.php" class="link">
                <span class="link-text">Fayoum</span>
            </a>
            <a href="./medicalTourism/aswan.php" class="link">
                <span class="link-text">Aswan</span>
            </a>
            <a href="./medicalTourism/giza.php" class="link">
                <span class="link-text">Giza</span>
            </a>
            <a href="./medicalTourism/redSea.php" class="link">
                <span class="link-text">Red Sea</span>
            </a>
            <a href="./medicalTourism/cairo.php" class="link">
                <span class="link-text">Cairo</span>
            </a>
            <a href="./medicalTourism/newValley.php" class="link">
                <span class="link-text">New Valley</span>
            </a>
            <a href="./medicalTourism/sinai.php" class="link">
                <span class="link-text">Sinai</span>
            </a>
            <a href="./medicalTourism/matrouh.php" class="link">
                <span class="link-text">Matrouh</span>
            </a>
        </div>
    </div>

    <div class="cover">
        <div class="con-cover">
            <div class="det-cover">
                <h1>make the next one count.</h1>
            </div>
        </div>
    </div>

    <div class="l-main">
        <div class="con-main">
            <h1>Tourist places</h1>
            <div class="box-main">
                <div class="box-img">
                    <img src="../images/medicalTourism/Picture1.jpg" alt="" />
                </div>
                <h2>Aswan</h2>
                <p>
                    Aswan is considered one of the most beautiful cities for medical
                    tourism in Egypt, and even tourism in general, so you find it with a
                    distinctive winter season that distinguishes it from other cities in
                    the world. This climate is suitable for patients with rheumatism,
                    kidneys, and respiratory systems, and there are water and sand
                    therapy centers, where a person places his body in hot sand. It will
                    be very useful especially for patients with rheumatism. The sand
                    components differ in the different regions of Aswan according to the
                    chemical composition And biologist of the area
                </p>
                <button class="button-main">more details</button>
            </div>
            <div class="box-main">
                <div class="box-img box-img01">
                    <img src="../images/medicalTourism/Picture2.png" alt="" />
                </div>
                <h2>The sulfur springs in Ain Sokhna Description</h2>

                <p>
                    It is a group of eyes exploding from the ground in the form of
                    waterfalls to form small lakes, and those sulfur eyes were the main
                    reason for naming Ain Sokhna by this name, and it is one of the
                    natural remedies that many people resort to for healing from chronic
                    diseases, bone diseases and breathing And skin diseases. The
                    benefit: it helps to heal from bone pain, gout, paralysis,
                    rheumatoid, neurological diseases, sinusitis, asthma, bronchitis,
                    scabies, psoriasis, allergies, and acne, as it helps in relaxing
                    muscles and getting rid of negative energy. The treatment method:
                    All you have to do is stay in that water from 10 minutes to 20
                    minutes once periodically, and the water temperature ranges between
                    37 degrees Celsius and 39 degrees Celsius to open the pores of the
                    skin and allow water to enter and renew cells
                </p>
                <button class="button-main">more details</button>
            </div>
        </div>
    </div>
</body>

</html>