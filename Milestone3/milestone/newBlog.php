<?php
// Samantha Krall CST-126 

$userName=$_SESSION["userName"];
$title=$_POST['title'];
$subtitle=$_POST['subtitle'];
$blogPost=$_POST['blogPost'];
$category=$_POST['category'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "milestone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$query = "INSERT INTO blogposts (userName, title, subtitle, blogPost, category) 
    VALUES ('$userName', '$title', '$subtitle', '$blogPost', '$category')";

if ($conn->query($query) === TRUE){
    echo "New blog post has been created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
$db->close();
?>

<html>
	<a href="mainBlogPage.html">Main Page</a><br/><br/>
</html>