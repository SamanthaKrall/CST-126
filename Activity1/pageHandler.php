<?php 
// Samantha Krall  CST-126 

$firstName= $_POST["firstName"];
$lastName= $_POST["lastName"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "activity1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO users (firstName, lastName) VALUES ('$firstName', '$lastName')";
if(empty($firstName)){
        echo "<br/>The first name is required. Please enter all information.";
}
if(empty($lastName)){
    echo "<br/>The last name is required. Please enter all information.";
} 
if(!($firstName == NULL || $lastName == NULL) && $conn->query($sql) === TRUE){
    echo "You have been successfully registered!";
} else {
    echo "Error: " . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>

