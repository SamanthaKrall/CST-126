<?php
// Samantha Krall CST-126

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "activity1";
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$user = $_POST["username"];
$pass = $_POST["password"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (firstName, lastName, username, password) VALUES ('$firstName', '$lastName', '$user', '$pass')";
if ($firstName == NULL){
    echo n12br("The first name is a required field that can not be left blank\n");
}
if ($lastName == NULL){
    echo n12br("The last name is a required field that can not be left blank\n");
}
if ($user == NULL){
    echo n12br("The username is a required field that can not be left blank\n");
}
if ($pass == NULL){
    echo n12br("The password is a required field that can not be left blank\n");
}
if (!($firstName == NULL || $lastName == NULL || $user == NULL || $pass == NULL) && $conn->query($sql) === TRUE){
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>