<?php
// Samantha Krall CST-126

$userName=$_POST['userName'];
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

include 'css.css';
include 'functions.php';
dbConnect();

$query = "INSERT INTO users (userName, userRole, userNickname, firstName, middleName, lastName, email1, email2, address1, address2, city, state, zipcode, country) 
    VALUES ('userName', 'userRole', 'userNickname', 'firstName', 'middleName', 'lastName', 'email1', 'email2', 'address1', 'address2', 'city', 'state', 'zipcode', 'country')";
$stmt = $db->prepare($query);
$stmt->bind_param($userName, $userRole, $userNickname, $firstName, $middleName, $lastName, $email1, $email2, $address1, $address2, $city, $state, $zipcode, $country);
if ($stmt->affected_rows > 0){
    echo "<p>User has been entered into the database.</p>";
} else {
    echo "<p>An error has occurred. The user has not been added.</p>";
}
connectionClose();
?>
<html>
    	<div class="topnav">
			<a href="mainBlogPage.php"><button>Home</button></a>
			<button onclick="goBack()">Go Back</button>
			<a href="logout.php"><button>Logout</button></a>
		</div>
		<script>
			function goBack(){
				window.history.back();
			}
		</script>
		<br>
</html>