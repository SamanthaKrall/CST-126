<?php
// Samantha Krall CST-126
session_start();
$_SESSION["userName"]=$_POST["userName"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "milestone";

$user = $_SESSION["userName"];
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
$sql = ("SELECT userName, userRole FROM users WHERE userName=" . mysqli_real_escape_string($_POST['userName']) . "AND userRole=" . mysqli_real_escape_string($_POST['userRole']));
$captured = $conn->query($sql);
if($captured->num_rows = 1){
    echo "<p>Login was successful</p>";
} else if ($captured->num_rows = 0){
    echo "Login Failed";
} else if ($captured->num_rows > 2){
    echo "There are multiple users that have registered";
} else {
    echo $conn->error;
}
$conn->close();
?>
<html>
	<head>
		<style>
		  *{
		      background-color: powderblue;
		  }		
		</style>
	</head>
	<br/>
	<a href="mainBlogPage.php">Main Page</a><br/><br/>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
</html>