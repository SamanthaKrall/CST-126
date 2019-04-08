<?php
// Samantha Krall CST-126

include 'css.css';
include 'functions.php';
$conn = dbConnect();

session_start();
$user = $_POST['userName'];
$userRole = $_POST["userRole"];

$_SESSION['userName'] = $user;

if($user == NULL){
    echo n12br("The User name is a required field that can not be left blank\n");
}
if ($userRole == NULL){
    echo n12br("The user role is a required field that can not be left blank\n");
}
$sql = ("SELECT userName, userRole FROM users WHERE userName=" . mysqli_real_escape_string($_POST['userName']) . "AND userRole=" . mysqli_real_escape_string($_POST['userRole']));
$captured = $conn->query($sql);
if($captured->num_rows = 1){
    echo "<h1 align='center'><p>Login was successful</p>" . $user . "</h1>";
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
	<?php if ($userRole == "admin"){
		  echo "<a href='admin.php'><button style='background-color:forestgreen'>Admin Page</button></a>";
		} else {
		  echo "<a href='mainBlogPage.php'><button> Main Frog Blog </button> </a>";
		}
		function goBack() {
		  window.history.back();
		}?>
		<a href='newBlog.php'><button>New Blog</button></a>
		<button onclick="goBack()">Go Back</button>
		<a href="logout.php"><button>Logout</button></a>
	<script>
		function goBack(){
			window.history.back();
		}
	</script>
	</body>
</html>