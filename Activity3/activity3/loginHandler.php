<?php
// Samantha Krall CST-126

$user = $_POST["username"];
$pass = $_POST["password"];

include("myfuncs.php");
$connect = dbConnect();

if ($connect->connect_error){
    die("Connection failed: " . $connect->connect_error);
}
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass' ";
$captured = $connect->query($sql);
if($captured->num_rows = 1){
    include("loginResponse.php");
} else if ($captured->num_rows = 0){
    include("loginFailed.php");
} else if ($captured->num_rows > 2){
    echo "There are multiple users that have registered";
} else {
    echo $connect->error;
}
if($user == NULL || $pass == NULL){
    echo n12br("The Username and Password are required fields that can not be left blank\n");
}
$row = $result->fetch_assoc(); // read the row from the query
saveUserId($row["ID"]); // save user id in the session

?>