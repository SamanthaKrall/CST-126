<?php
// Samantha Krall CST-126

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "activity1";
$conn = new mysqli($servername, $username, $password, $dbname);

function dbConnect() {
    global $conn;
    
    return $conn;
}
function saveUserId($user){
    session_start();
    $_SESSION["ID"]=$id;
}
function getUserId(){
    session_start();
    return $_SESSION["ID"];
}
?>