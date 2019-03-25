<?php
// Samantha Krall CST-126 

$_SESSION['userName']=$userName;
$title=$_POST['title'];
$subtitle=$_POST['subtitle'];
$blogPost=$_POST['blogPost'];
$category=$_POST['category'];

include 'css.css';
include 'functions.php';
$conn = dbConnect();

$query = "INSERT INTO blogposts (userName, title, subtitle, blogPost, category) 
    VALUES ('$userName', '$title', '$subtitle', '$blogPost', '$category')";

if ($conn->query($query) === TRUE){
    echo "New blog post has been created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
$close = connectionClose();
?>

<html>
	<a href="mainBlogPage.php">Main Page</a><br/><br/>
</html>