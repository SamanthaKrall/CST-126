<?php
include 'css.css';
include 'functions.php';
$conn = dbConnect();
$id = $_POST['hidden'];
$sql = "SELECT * FROM comments WHERE id = $id";
?>
<html>
<body>
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
	<section>
	<article>
	<?php $result = $conn->query($sql);	?>
	<table id=commentTable style="background-color: lightgreen;">
		<tr style="color: darkgreen;">
		<strong>
			<th>Comments</th>
			<th>Rating</th>
		</strong>
		</tr>
		<?php while ($row = $result->fetch_assoc()): ?>
		<form method="post">
		<tr>
			<td> <?php echo $row['comment']; ?> </td>
			<td> <?php echo $row['rating']; ?> </td>
		</tr>
		</form>
		<?php endwhile; ?>
	</table>
	<?php connectionClose(); ?>
	</article>
	<aside>
	<form method="post" action="addComment.php">
	Add a new comment: <br><br>
	<textarea rows="5" cols="15" name='comment'>Enter Comment Here</textarea>
	Rating between 1 - 10: <br><br>
	<select name='rating'>
		<option value='1'>1</option>
		<option value='2'>2</option>
		<option value='3'>3</option>
		<option value='4'>4</option>
		<option value='5'>5</option>
		<option value='6'>6</option>
		<option value='7'>7</option>
		<option value='8'>8</option>
		<option value='9'>9</option>
		<option value='10'>10</option>
	</select>
	<button onclick='addComment.php'>Submit</button>
	</form>
	</aside>
	</section>
</body>
</html>