<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="../CSS/hotels.css">
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
    <div class="container">
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
                        <a href="./aboutus.php">About us</a>
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
                <a href="./hotels/hotelsOfCairo.php">
                    <div class="data">
                        <span class="text">
                            Cairo
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./hotels/hotelsOfGeza.php">
                    <div class="data">
                        <span class="text">
                            Giza
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./hotels/hotelsOfAlexandria.php">
                    <div class="data">
                        <span class="text">
                            Alexandria
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./hotels/hotelsLuxer.php">
                    <div class="data">
                        <span class="text">
                            Luxor
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="./hotels/hotelsOfAswan.php">
                    <div class="data">
                        <span class="text">
                            Aswan
                        </span>
                    </div>
                </a>
            </div>
            <!-- <div class="sc-icon">
                <a href="#">
                    <div class="data">
                        <span class="text">
                            Hurghada
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="#">
                    <div class="data">
                        <span class="text">
                            Sharm El-Shaikh
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="#">
                    <div class="data">
                        <span class="text">
                            El Gouna
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="#">
                    <div class="data">
                        <span class="text">
                            Ain Sokhna
                        </span>
                    </div>
                </a>
            </div>
            <div class="sc-icon">
                <a href="#">
                    <div class="data">
                        <span class="text">
                            Sinai
                        </span>
                    </div>
                </a>
            </div> -->
        </div>
        <!--shortcut end-->
        <!--search box start-->
        <!-- <div class="search-box">
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
        <!--search box end-->
    </div>
    <!--CONTENT START-->
    <div class="content">
        <div class="hotels-data">
            <div class="title">
                <h2>Ramses Hilton Hotel & Casino</h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsCairo/RamsesHiltonHotel&Casino.jpg" alt="">
                <p>
                    Overlooking the Nile River and just a 5-minute walk from the Cairo Museum,
                    the Ramses Hilton features an elevated pool terrace heated in the winter, an on-site casino and gym.
                    <br>
                    Guest rooms feature balconies offering Nile or panoramic city views.
                    <br>
                    All air-conditioned rooms are spacious and feature warm decoration.
                    <br>
                    They come furnished with sofa and chairs and a work desk.
                    <br>
                    There is also satellite flat-screen TV, a safe box and an alarm clock.
                    <br>
                    Some rooms also feature panoramic views of the Nile River.
                    <br>
                    An array of international cuisines along with evening entertainment are available for guests at
                    Ramses Hilton to enjoy.
                    <br>
                    Ranging from Mediterranean specialties to traditional English cuisine at the Sherlock Holmes Pub.
                    <br>
                    This Cairo Hilton features a billiards room and for those seeking relaxation,
                    there is a spa offering massages, saunas and a hot tub. The Ramses also features an on-site shopping
                    galleria with 250 shops and an arcade.
                </p>
            </div>
        </div>
        <div class="hotels-data">
            <div class="title">
                <h2>Marriott Mena House, Cairo</h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsGiza/Marriott Mena House, Cairo.jpg" alt="">
                <p>
                    Overlooking the Great Pyramids of Giza, Marriott Mena House, Cairo is surrounded by 40 acres of
                    green
                    gardens and has a spa, fitness center and a pool. The rooms are decorated with handcrafted
                    furniture.
                    <br>
                    All accommodations at Marriott Mena House, Cairo have air conditioning and include luxurious
                    fabrics,
                    a seating area and LCD TV. Each room and suite has a spacious private bathroom with a bathrobe and
                    slippers.
                    <br>
                    Breakfast is available in the dining room facing the garden.
                    <br>
                    Dining choices range from Italian specialties at Alfredo Restaurant, while Daily Buffet Breakfast
                    and unforgettable vistas with its cocktails served at 139 Pavilion.
                    <br>
                    Recreational Facilities include a heated swimming pool tucked away in the landscape gardens.
                    <br>
                    The Giza Pyramids are less than half a kilometer from the Marriott Mena House. The concierge
                    can arrange horse and camel rides to the pyramids. Cairo Airport is 19 mi away.
                    <br>
                    Couples in particular like the location – they rated it 9.4 for a two-person trip.
                </p>
            </div>
        </div>
        <div class="hotels-data">
            <div class="title">
                <h2>Sunrise Alex Avenue Hotel</h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsAlexandria/Sunrise Alex Avenue Hotel.jpg" alt="">
                <p>
                    Occupying a sea front location in the middle of Alexandria, SUNRISE Alex Avenue Hotel
                    features a private beach. All rooms boast panoramic views of the Mediterranean Sea. The hotel has 2
                    outdoor pools and spa.
                    <br>
                    All rooms and suites at the hotel include a balcony and feature a modern décor. Each suite has a
                    living room,
                    a flat-screen TV and an electric kettle. The bathroom is fitted with bath and hairdryer.
                    <br>
                    Guests can enjoy an exquisite international cuisine, Lebanese cuisine and an oriental buffet
                    breakfast at Mediterranean Restaurant.
                    Featuring a seafront location, Laguna Terrace offers light snacks. Cocktails are served at Lounge
                    Bar and Montreal.
                    <br>
                    The hotel has a fully equipped gym with cardiovascular machines and a spa that offers relaxing
                    massage treatments to guests.
                    For more relaxed options: a hot tub and steam room are also available.
                    <br>
                    SUNRISE Alex Avenue Hotel is located only 1.9 mi from the city center and the stunning Bibliotheca
                    Alexandrina.
                    Alexandria Airport is 6.2 mi drive away. Wi-Fi is available upon request.
                </p>
            </div>
        </div>
        <div class="hotels-data">
            <div class="title">
                <h2>Sofitel Winter Palace Luxor</h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsLuxor/Sofitel Winter Palace Luxor.jpg" alt="">
                <p>
                    A stunning example of Victorian architecture, this prestigious hotel is a short
                    walk from Luxor Temple and features high-standard facilities.
                    <br>
                    Sofitel Winter Palace Luxor has a history of hosting royalty and celebrities throughout the years.
                    The interior features grand staircases, high ceilings and lounge areas that are furnished with
                    antique
                    furniture and beautiful flower arrangements.
                    <br>
                    As can be expected, Winter Palace's restaurants have a historical reputation to keep up to. Relax
                    and
                    socialize as you enjoy French cuisine with the latest fusion dishes from around the world.
                    <br>
                    The pool scene is stunning and has the vibe of a private oasis with surrounding palm trees.
                    A variety of convenient services are also offered at Winter Palace to deliver a memorable and
                    stress-free vacation.
                    <br>
                    Couples in particular like the location – they rated it 9.7 for a two-person trip.
                </p>
            </div>
        </div>
        <div class="hotels-data">
            <div class="title">
                <h2>Sofitel Legend Old Cataract</h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsAswan/Sofitel Legend Old Cataract.jpg" alt="">
                <p>
                    Located in the Nubian Desert on the banks of the Nile, opposite Elephantine Island, Sofitel Legend
                    Old
                    Cataract offers elegant rooms and suites. It features outdoor and indoor pools.
                    <br>
                    This Victorian building with the pink granite facade has modern rooms with private bathrooms.
                    Each of the air-conditioned rooms is decorated with wooden furniture.
                    <br>
                    Sofitel Legend Old Cataract has 4 restaurants serving international and oriental dishes for
                    breakfast,
                    lunch and dinner. The Oriental Kebabgy Restaurant has a terrace with panoramic views over Nile.
                    <br>
                    The hotel’s 4 bars offer refreshing drinks. The Promenade has views over Elephantine Islands,
                    while The Bar is an evening piano lounge in a classic oriental setting.
                    <br>
                    Guests can visit the hotel’s spa and relax in the sauna, the hammam, or the hot tub.
                    They can also use the fitness center or enjoy massage treatments.
                    <br>
                    Aswan International Airport is 8.7 mi away.
                    <br>
                    Couples in particular like the location – they rated it 9.9 for a two-person trip.
                </p>
            </div>
        </div>
        <div class="hotels-data">
            <div class="title">
                <h2>Cairo Marriott Hotel & Omar Khayyam Casino </h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsCairo/Cairo Marriott Hotel & Omar Khayyam Casino2.jpg" alt="">
                <p>
                    Located in Cairo’s Zamalek district, the Marriott Omar Khayyam offers luxurious
                    rooms with a balcony overlooking the Nile or the gardens. It features a casino and
                    15 food and beverage outlets. The hotel's Cairo Twin Towers provide panoramic views
                    of the Nile and six acres of the palace gardens.
                    <br>
                    All guest rooms at the Cairo Marriott feature satellite TV, a mini-bar, tea/coffee
                    facilities and elegant bathrooms. Some rooms also feature panoramic views of the Nile River.
                    <br>
                    The Cairo Marriott Hotel serves Japanese, Italian and Middle Eastern cuisine at its restaurants.
                    Meals are served indoors and al fresco. The hotel also has 6 cafés and bars where drinks and
                    light refreshments are available.
                    <br>
                    The Gabalaya Park and Aquarium are just a 2-minute walk from the Cairo Marriott.
                    <br>
                    Couples in particular like the location – they rated it 8.8 for a two-person trip.
                </p>
            </div>
        </div>
        <div class="hotels-data">
            <div class="title">
                <h2>Four Seasons Cairo At The First Residence</h2>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="content-data">
                <img src="../images/Hotels/hotelsGiza/Four Seasons Cairo At The First Residence.jpg" alt="">
                <p>
                    Enjoying impressive views of Cairo’s skyline and the Pyramids, The Four Seasons Hotel
                    in Cairo’s Gizah district features a full-service spa and outdoor pool. The Nile River
                    is just 100 m away.
                    <br>
                    All rooms at The First Residence Cairo feature stylish colonial décor and panoramic
                    city or Nile views. They are equipped with a flat-screen TV, a BOSE entertainment
                    system and a DVD player.
                    <br>
                    Facilities include a top-floor spa offering a wide range of health and
                    beauty treatments. It also features a sauna, hot tub and fitness center.
                    Guests can also try their luck at the on-site casino.
                    <br>
                    Light refreshments are offered at the Tea Lounge. Guests can feast on traditional
                    Syrian/Lebanese cuisine that is served pool side in Aura. There is also La
                    Gourmandize which is a trendy brasserie eatery located in the heart of The First Mall.
                    <br>
                    Four Seasons Cairo At The First Residence offers a room service, car rental services
                    and airport limousine services. Four Seasons Cairo At The First Residence is just
                    a 2-minute walk from Cairo’s historic Zoological and Botanical Gardens.
                    Cairo International Airport is 16 mi from the property.
                    <br>
                    Couples in particular like the location – they rated it 8.5 for a two-person trip.
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
    </footer>
    <!--FOOTER END-->
</body>

</html>