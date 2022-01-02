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
    <link rel="stylesheet" href="../CSS/archaeologicalTourism.css" />
    <title>Archaeological Tourism</title>
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
            <a href="./archaeologicalTourism/luxer.php" class="link">
                <span class="link-text">Luxor</span>
            </a>
            <a href="./archaeologicalTourism/aswan.php" class="link">
                <span class="link-text">Aswan</span>
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
                    <img src="../images/archaeologicalTourism/Picture1.jpg" alt="" />
                </div>
                <h2>The pyramids of Egypt</h2>
                <p>
                    The Egyptian pyramids are ancient pyramid-shaped masonry structures
                    located in Egypt. As of November 2008, sources cite either 118 or
                    138 as the number of identified Egyptian pyramids.[1][2] Most were
                    built as tombs for the country's pharaohs and their consorts during
                    the Old and Middle Kingdom periods View of the pyramids at Giza from
                    the plateau to the south of the complex. From left to right, the
                    three largest are: the Pyramid of Menkaure, the Pyramid of Khafre
                    and the Great Pyramid of Khufu. The three smaller pyramids in the
                    foreground are subsidiary structures associated with Menkaure's
                    pyramid.
                </p>
                <button class="button-main">more details</button>
            </div>
            <div class="box-main">
                <div class="box-img box-img01">
                    <img src="../images/archaeologicalTourism/Picture2.jpg" alt="" />
                </div>
                <h2>Baron Empain Palace</h2>

                <p>
                    The Baron Empain Palace (Arabic: قصر البارون إمبان‎, "Qasr el
                    Baron"), better known as Le Palais Hindou (literally, The Hindu
                    Palace), is a distinctive and historic Hindu temple inspired mansion
                    in Heliopolis, a suburb northeast of central Cairo, Egypt.
                </p>
                <button class="button-main">more details</button>
            </div>

            <div class="box-main">
                <div class="box-img">
                    <img src="../images/archaeologicalTourism/Picture3.jpg" alt="" />
                </div>
                <h2>Cairo Tower</h2>
                <p>
                    The Cairo Tower (Egyptian Arabic: برج القاهرة‎, Borg El-Qāhira) is a
                    free-standing concrete tower in Cairo, Egypt. At 187 m (614 ft), it
                    is the tallest structure in Egypt and North Africa. It was the
                    tallest structure in Africa for ten years until 1971, when it was
                    surpassed by Hillbrow Tower in South Africa. From its 187 meters,
                    the Cairo tower offers the most amazing panoramic views of the
                    Egyptian capital. It is advised to go up to the tower's circular
                    observation deck in the late morning or late afternoon for the
                    clearest views of the city. You'll also find a restaurant at the top
                    of the tower. Occasionally, the restaurant revolves around the
                    tower's main axis. The tower was designed by the Egyptian architect,
                    Naoum Chebib. Its completion took 5 years, from 1956 to 1961.
                    Opening Hours: From 8 am to midnight. Ticket Price(s): 60 EGP, Free
                    for children under 6 For more information.
                </p>
                <button class="button-main">more details</button>
            </div>
            <div class="box-main">
                <div class="box-img">
                    <img src="../images/archaeologicalTourism/Picture4.jpg" alt="" />
                </div>
                <h2>Cairo Museum</h2>
                <p>
                    The Museum of Egyptian Antiquities, known commonly as the Egyptian
                    Museum or Museum of Cairo, in Cairo, Egypt, is home to an extensive
                    collection of ancient Egyptian antiquities. It has 120,000 items,
                    with a representative amount on display and the remainder in
                    storerooms. Built in 1901 by the Italian construction company,
                    Garozzo-Zaffarani, to a design by the French architect Marcel
                    Dourgnon, the edifice is one of the largest museums in the region.
                    As of March 2019, the museum was open to the public. In 2021, the
                    museum is due to be superseded by the new Grand Egyptian Museum at
                    Giza.
                </p>
                <button class="button-main">more details</button>
            </div>
            <div class="box-main">
                <div class="box-img">
                    <img src="../images/archaeologicalTourism/Picture5.jpg" alt="" />
                </div>
                <h2>The National Museum of Egyptian Civilization in Fustat</h2>
                <p>
                    The Mortuary Temple of Hatshepsut, also known as the Djeser-Djeseru
                    (Ancient Egyptian: ḏsr ḏsrw "Holy of Holies"), is a mortuary temple
                    of Ancient Egypt located in Upper Egypt. Built for the Eighteenth
                    Dynasty pharaoh Hatshepsut, who died in 1458 BC, the temple is
                    located beneath the cliffs at Deir el-Bahari on the west bank of the
                    Nile near the Valley of the Kings. This mortuary temple is dedicated
                    to Amun and Hatshepsut and is situated next to the mortuary temple
                    of Mentuhotep II, which served both as an inspiration and, later, a
                    quarry. It is considered one of the "incomparable monuments of
                    ancient Egypt.
                </p>
                <button class="button-main">more details</button>
            </div>
            <div class="box-main">
                <div class="box-img">
                    <img src="../images/archaeologicalTourism/Picture6.jpg" alt="" />
                </div>
                <h2>Hatshepsut Temple in Deir el-Bahari</h2>
                <p>
                    The mortuary temple of Hatshepsut (c.1478/72-1458 B.C.E.) dates from
                    the New Kingdom. It nestles at the foot of the cliffs in a natural
                    "bay" on the West Bank of Luxor. This area had long been sacred to
                    the goddess Hathor and was the site of the earlier mortuary temple
                    and tomb of King Nebhepetre Mentuhotep (c.2008-1957 B.C.E.) of the
                    Middle Kingdom (ramp visible on the far left). After the
                    introduction of Christianity, Hatshepsut’s temple was used as a
                    monastery, hence its modern name, Deir el-Bahri, Arabic for
                    "Northern Monastery." Hatshepsut was a female pharaoh who had
                    herself represented pictorially as a male. She served as co-regent
                    with her nephew Thutmose III (c.1479-1425 B.C.E.). The Polish
                    National Academy of Sciences is responsible for the study and
                    restoration of the three levels of the temple. As of spring 1995,
                    the first two levels were almost complete, and the top level was
                    still under reconstruction.
                </p>
                <button class="button-main">more details</button>
            </div>
            <div class="box-main">
                <div class="box-img">
                    <img src="../images/archaeologicalTourism/Picture7.jpg" alt="" />
                </div>
                <h2>Salah al-Din castle</h2>
                <p>
                    Salah al-Din al-Ayyubi proceeded to construct a castle over the
                    Mokattam Mountain in a location known as the Dome of the Air. But he
                    did not complete it in his life. But it was completed by Sultan
                    Al-Kamil bin Al-Adel. The first to reside in it was the full king,
                    and he took it as a residence for the king. And it lasted so until
                    the era of Muhammad Ali Pasha. And in the western side of the
                    castle, there is an inscribed door and above it an inscription
                    indicating the construction of this castle, and its text: “In the
                    name of God, the Most Gracious, the Most Merciful. The world and the
                    religion, Abu Al-Muzaffar Yusef bin Ayyub Muhyi, the state of the
                    Commander of the Faithful in the eyes of his brother and Crown
                    Prince, the just king Saif al-Din Abu Bakr Muhammad Khalil, the
                    Commander of the Faithful, at the hands of the Emir of his kingdom,
                    and the designator of his state, Qaraqosh Ibn Abdullah al-Maliki
                    al-Nasiri in the year of seventy-five hundred.
                </p>
                <button class="button-main">more details</button>
            </div>
        </div>
    </div>
</body>

</html>