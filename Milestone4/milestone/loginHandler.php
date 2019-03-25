<?php
// Samantha Krall CST-126

include 'css.css';
include 'functions.php';
$conn = dbConnect();

session_start();
$user = $_POST['userName'];
$userRole = $_POST["userRole"];

if($user == NULL){
    echo n12br("The Username is a required field that can not be left blank\n");
}
if ($userRole == NULL){
    echo n12br("The user role is a required field that can not be left blank\n");
}
$sql = ("SELECT userName, userRole FROM users WHERE userName=" . mysqli_real_escape_string($_POST['userName']) . "AND userRole=" . mysqli_real_escape_string($_POST['userRole']));
$captured = $conn->query($sql);
if($captured->num_rows = 1){
    echo "<p>Login was successful</p>" . $user;
} else if ($captured->num_rows = 0){
    echo "Login Failed";
} else if ($captured->num_rows > 2){
    echo "There are multiple users that have registered";
} else {
    echo $conn->error;
}
connectionClose();
?>
<html>
<body background="littleFrog.jpg">
	<br/><br/>
	<a href="mainBlogPage.php">Main Page</a><br/><br/>
	<a href="newBlog.html">New blog post</a><br/><br/>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
	</body>
</html>