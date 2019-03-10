<?php
// Samantha Krall CST-126

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "milestone";

$user = $_POST["username"];
$userRole = $_POST["userRole"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
if($user == NULL){
    echo n12br("The Username is a required field that can not be left blank\n");
}
if ($userRole == NULL){
    echo n12br("The user role is a required field that can not be left blank\n");
}
$sql = ("SELECT username, userRole FROM users WHERE username=" . mysqli_real_escape_string($_POST['username']) . "AND userRole=" . mysqli_real_escape_string($_POST['userRole']));
$captured = $conn->query($sql);
if($captured->num_rows = 1){
    echo "Login was successful";
} else if ($captured->num_rows = 0){
    echo "Login Failed";
} else if ($captured->num_rows > 2){
    echo "There are multiple users that have registered";
} else {
    echo $conn->error;
}
$conn->close();
?>