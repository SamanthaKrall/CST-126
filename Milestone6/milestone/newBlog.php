<?php
// Samantha Krall CST-126 

session_start();
$_SESSION['userName'];

$title=$_POST['title'];
$subtitle=$_POST['subtitle'];
$blogPost=$_POST['blogPost'];
$category=$_POST['category'];

include 'css.css';
include 'functions.php';
$conn = dbConnect();

$query = "INSERT INTO blogposts (userName, title, subtitle, blogPost, category) 
    VALUES ('$_SESSION[userName]', '$title', '$subtitle', '$blogPost', '$category')";

if ($conn->query($query) === TRUE){
    echo "New blog post has been created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
$close = connectionClose();
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