<?php 

require_once "dbh.inc.php";
require_once "functions.inc.php";

if(isset($_POST["submit"])){

$fullName = $_POST['name'];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["pass1"];
$confirmPassword = $_POST["pass2"];

if(emptyInputSignup($fullName, $username, $email, $password, $confirmPassword) !== false){
  header("location:"."../signIn/signup.php?error=emptyinput");
  exit();
}

if(invalidUid($username) !== false){
  header("location:"."../signIn/signup.php?error=invaliduid");
  exit();
}

if(invalidEmail($email) !== false){
  header("location:"."../signIn/signup.php?error=invalidemail");  
  exit();
}

if(pwdMatch($password, $confirmPassword) !== false){
  header("location:"."../signIn/signup.php?error=passwordsdontmatch");  
  exit();
}

if(uidExists($conn, $username) !== false){
  header("location:"."../signIn/signup.php?error=usernametaken");  
  exit();
}

if(uemailExists($conn, $email) !== false){
  header("location:"."../signIn/signup.php?error=emailtaken");  
  exit();
}

createUser($conn, $fullName, $email, $username, $password);

}else{
  header("location:"."../signIn/signup.php");
}