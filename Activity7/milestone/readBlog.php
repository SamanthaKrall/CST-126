<?php
    include 'css.css';
    include 'functions.php';
    $conn = dbConnect();
    $sql = "SELECT * FROM blogposts";
    session_start();
    $userName = $_SESSION['userName'];
?>
<!DOCTYPE html>
<html>
	<body background="frogReading.jpg">
		<h1 align="center"><strong>Hopping through the Frog Blog</strong></h1><br/>
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
		<?php $result = $conn->query($sql); ?>
    	<table id=blogTable style="background-color: lightgreen;">
    	   <tr style="color: darkgreen;">
    	   <strong>
            <th>ID</th>
            <th>User Name</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Blog</th>
            <th>Category</th>
            <th>Comments</th>
            </strong>
           </tr> 
           <?php while ($row = $result->fetch_assoc()): ?>
           <form method="post">
    	      <tr>
    	        <td> <?php echo $row["id"]; ?> </td>
    	        <td> <?php echo $row["userName"]; ?> </td>
    	        <td> <?php echo $row["title"]; ?>  </td>
    	        <td> <?php echo $row["subtitle"]; ?> </td>
    	        <td> <?php echo $row["blogPost"]; ?> </td>
    	        <td> <?php echo $row["category"]; ?> </td>
    	        <input type="hidden" name='hidden' value="$row['id']" > 
    	        <td> <input type="submit" formaction='comments.php' name='comments' value='Comments' style="background-color: lightgreen;"> </td>
    	       </tr>
    	    </form>
    	    <?php endwhile; ?>
    	</table>
    	<?php connectionClose(); ?>
	</body>
</html>