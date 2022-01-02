<?php

if(isset($_POST["submit"])){

    $fullName = $_POST["fullName"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $productName = $_POST["productName"];
    $typeProduct = $_POST["typeProduct"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];

    require_once "./dbh.inc.php";
    require_once "./functions.inc.php";

    if(emptyInputAdvertisement($fullName, $address, $email, $phone, $productName, $typeProduct, $startDate, $endDate) !== false){
        header("location:"."../SubPages/adver.php?error=emptyinput");
        exit();
    }

    if(invalidAemil($conn, $email) !== false){
        header("location:"."../SubPages/adver.php?error=emailtaken");
        exit();
    }

    if(invalidAphone($conn, $phone) !== false){
        header("location:"."../SubPages/adver.php?error=phonetaken");
        exit();
    }

    createAdvertisement($conn, $fullName, $address, $email, $phone, $productName, $typeProduct, $startDate, $endDate);

}else{
    header("location:"."../SubPages/adver.php");
}