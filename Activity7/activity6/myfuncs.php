<?php
// Samantha Krall CST-126

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "activity1";

function dbConnect() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        echo  $conn->connect_error;
    }
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

function closeConnection($conn){
    $conn->close();
}
?>