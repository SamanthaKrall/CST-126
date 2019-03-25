<?php
// Samantha Krall CST-126
include 'css.css';
session_start();

$userName=$_SESSION['userName'];
$userRole=$_POST['userRole'];
$userNickname=$_POST['userNickname'];
$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$lastName=$_POST['lastName'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$address1=$_POST['address1'];
$adress2=$_POST['adress2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$country=$_POST['country'];

include 'functions.php';
$conn = dbConnect();

$query = "INSERT INTO users (userName, userRole, userNickname, firstName, middleName, lastName, email1, email2, address1, adress2, city, state, zipcode, country) VALUES ('userName', '$userRole', '$userNickname', '$firstName', '$middleName', '$lastName', '$email1', '$email2', '$address1', '$adress2', '$city', '$state', '$zipcode', '$country')";
if ($userName == NULL){
    echo n12br("The user name is required and must not be left blank\n");
}
if ($userRole == NULL){
    echo n12br("The user role is required and must not be left blank\n");
}
if ($userNickname == NULL){
    $userNickname=$_POST['firstName'] . $_POST['lastName'];
}
if ($firstName == NULL){
    echo n12br("First name is required and must not be left blank\n");
}
if ($lastName == NULL){
    echo n12br("Last name is required and must not be left blank\n");
}
if ($email1 == NULL){
    echo n12br("An email address is required and must not be left blank\n");
}
if (!($userName == NULL || $userRole == NULL || $firstName == NULL || $lastName == NULL || $email1 == NULL) && $conn->query($query) === TRUE){
    echo "New record created successfully!";
} else {
    echo "Error: " . $query . "<br/>" . $conn->error;
}
$close = connectionClose();
?>
<html>
	<a href="mainBlogPage.php">Main Page</a><br/><br/>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
</html>