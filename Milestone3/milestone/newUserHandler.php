<?php
// Samantha Krall CST-126

$userName=$_SESSION["username"];
$userRole=$_POST['userRole'];
$userNickname=$_POST['userNickname'];
$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$lastName=$_POST['lastName'];
$email1=$_POST['email1'];
$email2=$_POST['email2'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$country=$_POST['country'];

$db = new mysqli('localhost', 'root', 'root', 'milestone');

if (mysqli_connect_errno()){
    echo "<p>Error: Could not establish connection to database.<br/>
    Please try again later.</p>";
    exit;
}

$query = "INSERT INTO users (userName, userRole, userNickname, firstName, middleName, lastName, email1, email2, address1, address2, city, state, zipcode, country) 
    VALUES ('userName', 'userRole', 'userNickname', 'firstName', 'middleName', 'lastName', 'email1', 'email2', 'address1', 'address2', 'city', 'state', 'zipcode', 'country')";
$stmt = $db->prepare($query);
$stmt->bind_param($userName, $userRole, $userNickname, $firstName, $middleName, $lastName, $email1, $email2, $address1, $address2, $city, $state, $zipcode, $country);
if ($stmt->affected_rows > 0){
    echo "<p>User has been entered into the database.</p>";
} else {
    echo "<p>An error has occured. The user has not been added.</p>";
}
$db->close();
?>
<html>
	<a href="mainBlogPage.html">Main Page</a><br/><br/>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
</html>