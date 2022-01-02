<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hike</title>
    <link rel="stylesheet" href="./CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container">
            <!--ber start-->
            <div class="navber">
                <!--logo start-->
                <a href="./Home.php">
                    <img src="images/logoo.png" alt="logo" class="logo">
                </a>
                <!--logo end-->
                <!--nav start-->
                <nav class="nav-link">
                    <ul class="nav-links">
                        <li>
                            <a href="./SubPages/aboutus.php">About us</a>
                        </li>
                        <?php 
                        
                        if(isset($_SESSION["useruid"])){
                            echo "<li><a href=''><i class='far fa-user-circle'></i></a></li>";
                            echo "<li>
                                    <a href=''>Hello There ". $_SESSION["userufullname"] ."<a/>
                                <li/>";
                            echo "<li><a href='./Inc/logOut.inc.php'>Log Out</a></li>";
                        }else{
                            echo "<li><a href='./signIn/signup.php'>Sign Up</a></li>";
                            echo "<li><a href='./signIn/login.php'>Sign In</a></li>";
                        }

                        ?>
                    </ul>
                </nav>
                <!--nav end-->
            </div>
            <!--ber end -->
    </header>
    <!--shortcut start-->
    <div class="shortcut">

        <div class="sc-icon">
            <a href="./SubPages/Hotels.php">
                <div class="data">
                    <span class="text">
                        Hotels
                    </span>
                    <span class="icon">
                        <i class="fas fa-hotel"></i>
                    </span>
                </div>
            </a>
        </div>
        <div class="sc-icon">
            <a href="./SubPages/Beaches.php">
                <div class="data">
                    <span class="text">
                        Beaches
                    </span>
                    <span class="icon">
                        <i class="fas fa-umbrella-beach"></i>
                    </span>
                </div>
            </a>
        </div>
        <div class="sc-icon">
            <a href="./SubPages/medicalTourism.php">
                <div class="data">
                    <span class="text">
                        Medical tourism
                    </span>
                    <span class="icon">
                        <i class="far fa-hospital"></i>
                    </span>
                </div>
            </a>
        </div>
        <div class="sc-icon">
            <a href="./SubPages/archaeologicalTourism.php">
                <div class="data">
                    <span class="text">
                        Archaeological tourism
                    </span>
                    <span class="icon">
                        <i class="fas fa-gopuram"></i>
                    </span>
                </div>
            </a>
        </div>
    </div>
    </div>
    </div>
    <!--shortcut end-->

    <!--search box slider start-->
    <div class="img-slider">
        <div class="slide active">
            <img src="./images/Home/SlideOfHome/1.jpg" alt="">
            <div class="info">
                <h2>hike.</h2>
                <p>
                    It can be searched on all places within the Arab Republic of Egypt and within all Egyptian cities.
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="./images/Home/SlideOfHome/2.jpg" alt="">
            <div class="info">
                <h2>hike.</h2>
                <p>
                    It can be searched on all places within the Arab Republic of Egypt and within all Egyptian cities.
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="./images/Home/SlideOfHome/3.jpg" alt="">
            <div class="info">
                <h2>hike.</h2>
                <p>
                    It can be searched on all places within the Arab Republic of Egypt and within all Egyptian cities.
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="./images/Home/SlideOfHome/4.jpg" alt="">
            <div class="info">
                <h2>hike.</h2>
                <p>
                    It can be searched on all places within the Arab Republic of Egypt and within all Egyptian cities.
                </p>
            </div>
        </div>
        <div class="slide">
            <img src="./images/Home/SlideOfHome/5.jpg" alt="">
            <div class="info">
                <h2>hike.</h2>
                <p>
                    It can be searched on all places within the Arab Republic of Egypt and within all Egyptian cities.
                </p>
            </div>
        </div>
        <!--search box start-->
        <form action="./resultOfSearch/searchBar.php" method="GET">
            <div class="search-box">
                <table class="sb-container">
                    <tr>
                        <td>
                            <input type="text" placeholder="Where To!" name="search" class="search-txt">
                        </td>
                        <td>
                            <button type="submit" class="btnSearch" name="submitSearch"><i
                                    class="fas fa-search"></i></button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        <!--search box end-->
    </div>
    <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
    </div>
    <!--search box slider end -->

    <!--content start-->
    <section>
        <div class="content">
            <h2>Important places.</h2>
            <div class="owl-carousel owl-theme">

                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-1.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Western Desert</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-2.png" alt="">
                        </div>
                        <div class="text">
                            <h5>AI Bagawatt</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-3.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Pyramid of Giza</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-4.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Kalahari Desert</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-1.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Western Desert</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-2.png" alt="">
                        </div>
                        <div class="text">
                            <h5>AI Bagawatt</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-3.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Pyramid of Giza</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="img">
                            <img src="./images/Home/OwlCarouselOfHome/pic-4.png" alt="">
                        </div>
                        <div class="text">
                            <h5>Kalahari Desert</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--content end-->

    <!--footer strat-->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-sec-Connectus">
                    <div class="logo-hike">
                        <img src="images/logoo.png" alt="" class="footer-logo">
                    </div>
                    <a href="./SubPages/contactUs.php"> Connect us </a>
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
        </div>
    </footer>
    <!--footer end -->
    <!--javascript search box slider start-->
    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    //javascript for image slider manual navigation
    var manualNav = function(manual) {
        slides.forEach((slide) => {
            slide.classList.remove('active');

            btns.forEach((btn) => {
                btn.classList.remove('active');
            });
        });

        slides[manual].classList.add('active');
        btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            manualNav(i);
            currentSlide = i;
        });
    });
    //javascript for image slider autoplay navigation
    var repeat = function(activeClass) {
        let active = document.getElementsByClassName('active');
        let i = 1;
        var repeater = () => {
            setTimeout(function() {
                [...active].forEach((activeSlide) => {
                    activeSlide.classList.remove('active')
                });

                slides[i].classList.add('active');
                btns[i].classList.add('active');
                i++;

                if (slides.length == i) {
                    i = 0;
                }
                if (i >= slides.length) {
                    return;
                }
                repeater();
            }, 10000);
        }
        repeater();
    }
    repeat();
    </script>
    <!--javascript search box slider end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>

    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplaytimeout: 1000,
        stagepadding: 50,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            },
            1400: {
                items: 6
            }
        }
    })
    </script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

</html>