<?php

/* ===== START CODING OF SIGNUP PAGE ===== */
function emptyInputSignup($fullName, $username, $email, $password, $confirmPassword){

    if(empty($fullName) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $confirmPassword){

    if($password !== $confirmPassword){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username){

    $sql = "SELECT * FROM users WHERE userName = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../signIn/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function uemailExists($conn, $email){

    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../signIn/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fullName, $email, $username, $password){

    $sql = "INSERT INTO users (userFullname, userName, userEmail, userPassword) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../signIn/signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fullName, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:"."../signIn/signup.php?error=none");
    exit();
}

/* ===== START CODING OF LOGIN PAGE ===== */
function emptyInputLogin($username, $pwd){

    if(empty($username) || empty($pwd) ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $fullName, $pwd){
    $uidExists = uidExists($conn, $username, $fullName);
    // $uidExistss = uidExists($conn, $fullName);

    if($uidExists === false){
        header("location:"."../signIn/login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPassword"];
    $checkPwd = password_verify( $pwd, $pwdHashed);

    if($checkPwd === false){
        header("location:"."../signIn/login.php?error=wronglogin");
        exit();
    }elseif($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userID"];
        $_SESSION["useruid"] = $uidExists["userName"];
        $_SESSION["userufullname"] = $uidExists["userFullname"];
        header("location:"."../Home.php");
        exit();
    }
}

/* ===== START CODING OF REPORTS PAGE ===== */
function emptyInputReport($report){
    if(empty($report)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function createReport($report, $conn){
    $sql = "INSERT INTO reports (reportData) VALUES (?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../SubPages/report.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $report);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:"."../SubPages/report.php?error=none");
    exit();
}

/* ===== START CODING OF ADVERTISEMENT ===== */
function emptyInputAdvertisement($fullName, $address, $email, $phone, $productName, $typeProduct, $startDate, $endDate){
    if(empty($fullName) || empty($address) || empty($email) || empty($phone) || empty($productName) || empty($typeProduct) || empty($startDate)|| empty($endDate)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function createAdvertisement($conn, $fullName, $address, $email, $phone, $productName, $typeProduct, $startDate, $endDate){
    $sql = "INSERT INTO advertisement (adverFullname, adverAddress, adverEmail, adverPhone, adverProductName, adverTypeProduct, adverStartDate, adverEndDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../SubPages/adver.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $fullName, $address, $email, $phone, $productName, $typeProduct, $startDate, $endDate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:"."../SubPages/adver.php?error=none");
    exit();
}

function invalidAemil($conn, $email){
    $sql = "SELECT * FROM advertisement WHERE adverEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../SubPages/adver.php");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function invalidAphone($conn, $phone){
    $sql = "SELECT * FROM advertisement WHERE adverPhone = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:"."../SubPages/adver.php");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $phone);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

/* ===== START CODING OF SEARCH BAR ===== */
function emptyInputSearch($searchBar){
    if(empty($searchBar)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}