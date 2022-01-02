<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beaches</title>
    <link rel="stylesheet" href="../CSS/hotels.css">
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
    <div class="container-beaches">
        <!--ber start-->
        <div class="navber">
            <!--logo start-->
            <a href="../Home.php">
                <img src="../images/logoo.png" alt="logo" class="logo">
            </a>
            <!--logo end-->
            <!--nav start-->
            <nav class="nav-link">
                <ul class="nav-links">
                    <li>
                        <a href="../SubPages/aboutus.php">About us</a>
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
            <!--nav end-->
        </div>
        <!--ber end -->
        <!--shortcut start-->
        <div class="shortcut">
            <div class="sc-icon">
                <a href="./beaches/sharmElshaikh.php">
                    <div class="data">
                        <span class="text">
                            Sharm El-Shaikh
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./beaches/Hurghada.php">
                    <div class="data">
                        <span class="text">
                            Hurghada
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./beaches/Alexandria.php">
                    <div class="data">
                        <span class="text">
                            Alexandria
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./beaches/Dahab.php">
                    <div class="data">
                        <span class="text">
                            Dahab
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./beaches/marsaMatrouh.php">
                    <div class="data">
                        <span class="text">
                            Marsa Matrouh
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <!--shortcut end-->
        <!--CONTENT START-->
        <div class="content-beaches">
            <div class="beaches-data">
                <div class="title">
                    <h2>Terracina Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Sharm El-Shaikh/Terracina Beach.jpg" alt="">
                    <p>
                        It is one of the most important and famous beaches in the city and one
                        of the best places to dive in, and the most important thing that distinguishes
                        it is its proximity to the Hilton Sharm Waterfalls resort, which is only a
                        few minutes away from it.
                        The beach offers designated areas for snorkeling, enjoying the water, and
                        exploring coral reefs and fish of various colors and unique shapes.
                        This beach is a sure destination for all visiting tourists, because it is a
                        center for diving in the city, in addition to the special activities that the
                        beach offers on Friday every week.
                        Beach opening hours are from eight in the morning until midnight.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Dahab beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Sharm El-Shaikh/Dahab beach.jpg" alt="">
                    <p>
                        Dahab Beach offers great opportunities for swimming, windsurfing
                        and water cycling, with full service facilities and restaurants
                        serving the best local cuisine. The beach has also become one of
                        the most popular destinations for tourists in Sharm El Sheikh and
                        the most attractive for local families, foreign expatriates and Arabs
                        to visit it and enjoy the magic of its turquoise waters.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Sharks beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Sharm El-Shaikh/Sharks Beach.jpg" alt="">
                    <p>
                        Sharks Beach is one of the public beaches of Sharm El Sheikh and is
                        located near Naama Bay, which made it gain great fame among visitors
                        to the city, and it is a suitable place for diving enthusiasts because
                        it contains fish in unique and varied shapes and colors and watching the
                        wonderful coral reefs
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Naama Bay Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Sharm El-Shaikh/Naama Bay Beach.jpg" alt="">
                    <p>
                        Naama Bay Beach is the most important beach in Sharm El Sheikh, characterized by
                        its sand that includes some natural stones, and unique coral reefs. In addition to
                        the spread of hotels with distinctive services on the edges of the beach, and you
                        can swim next to colorful fish and do many marine sports
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Al Sawaqi Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/hurghada/Al Sawaqi Beach.jpg" alt="">
                    <p>
                        One of the most beautiful beaches of Hurghada, located in the
                        Al-Dahar district, it is characterized by its clear water and
                        golden sand, and tourists can enjoy many beach activities such
                        as swimming and snorkeling or relaxing under the beach umbrellas
                        and spend some quality time.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Old Vic Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/hurghada/Old Vic Beach.jpg" alt="">
                    <p>
                        One of Egypt's best distinctive beaches in Hurghada, it is
                        located on Sheraton Street in the El Hadaba area, close to
                        the Blue Dreams Diving Club, and features clear turquoise water
                        and soft white sand.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Sheraton Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/hurghada/Sheraton Beach.jpg" alt="">
                    <p>
                        One of the most amazing beaches of Hurghada that we recommend for
                        tourists, where they can enjoy water activities such as swimming,
                        diving, snorkeling and even surfing, and then go to one of the
                        restaurants near the beach and have a hearty meal.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Montazah Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/Al Mamoura Beach.jpg" alt="">
                    <p>
                        Montazah Beach is one of the most beautiful and distinctive Alexandria
                        beaches, and it is one of Alexandria's private beaches. Montazah beach
                        is characterized by tranquility and therefore it is a destination for
                        relaxation lovers, especially as its waters are the most beautiful in
                        the city
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>San Stefano Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/San Stefano Beach.jpg" alt="">
                    <p>
                        San Stefano Beach is one of the most beautiful and distinctive beaches
                        of Alexandria, which is located in the area of Raml Station, and the
                        beach is characterized by clean blue water and corridors inside the sea,
                        which allow visitors the opportunity to walk surrounded by the sea from
                        both directions, San Stefano Beach is also one of the best private beaches of Alexandria
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Stanley Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/Stanley Beach.jpg" alt="">
                    <p>
                        Stanley Beach is one of the best distinctive beaches of Alexandria,
                        as it is not only distinguished by its wonderful water and fine sand,
                        but it is also known for its association with the famous Stanley Bridge,
                        which rises above it and gives it its distinctive shape from the rest of
                        the beaches of Alexandria
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Glim Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/Glim Beach.jpg" alt="">
                    <p>
                        Gleem Beach is one of the best beaches of Alexandria and the most
                        popular by visitors, and Gleem Beach, along with its beautiful blue waters,
                        contains rocks on which visitors sit to enjoy the view of the sea from above
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Miami Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/Miami Beach.jpg" alt="">
                    <p>
                        Miami Beach Miyami Beach is one of the best beaches of Alexandria that
                        is free and always open to visitors, and the sea of Miami Beach is
                        characterized by wonderful water, in addition to that the beach is
                        located close to the vital landmarks of Alexandria
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Cleopatra Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/Cleopatra Beach.jpg" alt="">
                    <p>
                        Cleopatra Beach is one of the most beautiful beaches of Alexandria,
                        and it is one of the famous free beaches that are popular with many
                        visitors to the city of Alexandria, and it is one of the beaches famous
                        for the boats that spread on them and visitors rent them to make
                        distinctive lake trips
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Al Mamoura Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Alexandria/Al Mamoura Beach.jpg" alt="">
                    <p>
                        Mamoura Beach is one of the best beaches in Alexandria, and it is
                        considered one of the private beaches of Alexandria. The beach is
                        characterized by the calmness of its waters and clean golden sand
                        and has a special privacy as it is separate from all other beaches
                        of Alexandria
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Lagon Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Dahab/Lagon Beach.jpg" alt="">
                    <p>
                        Dahab's public beach is an ideal choice for lovers of vitality and clamor
                        on the sea, and we do not recommend it to everyone who wants calm and relaxation,
                        as it may be the most famous beach of Dahab at all, and this beach has magical
                        views in addition to its golden sands that you will not tire of taking long walks on it .
                        <br>
                        The warm waters of this beach make it an ideal choice for swimming.
                        <br>
                        This beach also features a range of water games that make your enjoyment a must.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>The public beach in Dahab</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Dahab/The public beach in Dahab.png" alt="">
                    <p>
                        Dahab's public beach is an ideal choice for lovers of vitality and clamor on the sea,
                        and we do not recommend it to everyone who wants calm and relaxation, as it may be the
                        most famous beach of Dahab at all, and this beach has magical views in addition to its
                        golden sands that you will not tire of taking long walks on it .
                        <br>
                        The warm waters of this beach make it an ideal choice for swimming.
                        <br>
                        This beach also features a range of water games that make your enjoyment a must.

                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Connie’s Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Dahab/Connie’s Beach.png" alt="">
                    <p>
                        Koniz Beach in Dahab is one of Dahab's public beaches, and it
                        is a sandy beach that is distinguished by its proximity to the yacht marina.
                        <br>
                        This beach does not have many coral reefs, but it is distinguished by its
                        beautiful waters.
                        <br>
                        Pets are allowed on this beach.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Dahab Beach Lodge</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Dahab/Dahab Beach Lodge.png" alt="">
                    <p>
                        Dahab Beach Lodge has a stunning location right on the famous Dahab
                        Promenade and a few minutes walk from Dahab Bridge.
                        <br>
                        Maya Maya Café, The Kitchen Restaurant and Tuta Bar are near the hotel.
                        <br>
                        There is a large supermarket nearby and an ATM machine as well as many hookah cafes, dive
                        centers and other restaurants and bars.
                        <br>
                        The German Bakery and "Light House", the best diving site, are within a 5-10 minute walk.
                        Jobs and Blue Bus Station is a 5-minute walk away.
                        The hotel includes one of Dahab's distinctive beaches.

                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Dahab Beach Lodge</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Dahab/Dahab Beach Lodge.jpg" alt="">
                    <p>
                        The name of the hotel is “Dar” because you will feel at home due to the simplicity and elegance
                        of the house. The Dar Dahab Hotel is located directly on Asala Beach in Dahab. The sights and
                        sounds of the dancing waves are a pleasant feature and it is a perfect meeting between comfort
                        and elegance.
                        The tones and materials used inside the building blend harmoniously with the landscape.
                        It features palm furniture from local trees throughout. The salt-rich milky bricks that come
                        from Siwa have many health benefits and they form bed bases and distinctive walls.
                        The bulbs are made from local henna. Some of the walls are made of local earth.
                        Dar Dahab has a pleasant aesthetic effect, making it a satisfying stay.

                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Asala open beach in Dahab</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Dahab/Asala open beach in Dahab.jpg" alt="">
                    <p>
                        Dahab is a large beach that extends on the Red Sea with the most beautiful views,
                        but the beaches of Dahab, South Sinai are not all the same, so of course you will
                        search for the most beautiful beaches of Dahab so that the fun becomes the maximum
                        possible. We will not review the most beautiful beaches and hotels near them and
                        their prices now.
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Wonderful Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Marsa Matrouh/Wonderful beach.jpg" alt="">
                    <p>
                        Agiba Beach is characterized by being the best place for tourism in
                        Marsa Matruh, the beach is located twenty-four kilometers west of the
                        city, where it is characterized by high mountains and water gradient in
                        white, cyan and dark blue, and is characterized by its unique nature and
                        turquoise water,
                    </p>
                </div>
            </div>
            <div class="beaches-data">
                <div class="title">
                    <h2>Beach of Love</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Marsa Matrouh/Beach of Love.jpg" alt="">
                    <p>
                        Al-Gharam Beach is one of the famous beaches in Matrouh Governorate
                        and is located 17 kilometers from the center of Matrouh. The beach is
                        divided into two parts, the first has white soft sand and the second
                        has many rocks and strange mass formations .
                    </p>
                </div>
            </div>

            <div class="beaches-data">
                <div class="title">
                    <h2>Rommel Beach</h2>
                </div>
                <div class="content-data">
                    <img src="../images/beaches/Marsa Matrouh/Rommel Beach.jpg" alt="">
                    <p>
                        Rommel Beach is one of the best beaches of Marsa Matruh
                        and the most visited if you want to tourism in Marsa Matruh,
                        as it is characterized by the gradient of water colors that
                        there is no other beach
                        <br>
                        We find that there is a part that is colored dark blue and very deep,
                        and another part appears in the soft white sand and white water and
                        watching the fish swim and is suitable for children and the last part
                        is colored turquoise, which is of medium depth, so it is easy to swim.
                    </p>
                </div>
            </div>
        </div>
        <!--CONTENT END-->
        <!--FOOTER START-->
        <footer>
            <div class="footer">
                <div class="footer-content">
                    <div class="footer-sec-Connectus">
                        <div class="logo-hike">
                            <a href="../Home.php">
                                <img src="../images/logoo.png" alt="" class="footer-logo">
                            </a>
                        </div>
                        <a href="../SubPages/contactUs.php"> Connect us </a>
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
        </footer>
        <!--FOOTER END-->
</body>

</html>