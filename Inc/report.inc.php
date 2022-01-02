<?php 

if(isset($_POST["submit"])){
    $report = $_POST["report"];

    require_once "./dbh.inc.php";
    require_once "./functions.inc.php";

    if(emptyInputReport($report) !== false){
        header("location:"."../SubPages/report.php?error=emptyinput");
        exit();
    }

    createReport($report, $conn);
}else{
    header("location:"."../SubPages/report.php");
}