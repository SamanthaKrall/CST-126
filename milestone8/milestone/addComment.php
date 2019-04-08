<?php
include 'css.css';
$id = $_POST['id'];
$comment = $_POST['comment'];
$rating = $_POST['rating'];
include 'functions.php';
$conn = dbConnect();
$query = "INSERT INTO comments (id, comment, rating) VALUES ('$id', '$comment', '$rating')";
echo "New comment and rating have been added to post! <br><br>"
    . $comment . "<br><br>" . $rating ;
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