<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "milestone";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT userName, title, category FROM blogposts";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "<table><tr><th>User Name</th><th>Title</th><th>Category</th></tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["userName"] . "</td><td>" . $row["title"] . "</td><td>" . $row["category"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<style>
	table, th, td{
		border: 1px solid #f1f1f1;
		padding: 16px;
	}
	hr{
		border: 1px solid #f1f1f1;
		margin-bottom: 25px;
	}
	*{
		background-color: powderblue;
	}
</style>
</head>
<body>
	<a href="newBlog.html">Create a new Blog Post</a>
</body>
</html>