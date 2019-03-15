<?php
// Samantha Krall CST-126

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$user = $_POST["username"];
$pass = $_POST["password"];
include 'myfuncs.php';
$connect = dbConnect();
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