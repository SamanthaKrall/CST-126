<?php
    //Samantha Krall CST-126
    include 'functions.php';
    $conn = dbConnect();
    $sql = "SELECT userName, title, category FROM blogposts";
    include 'css.css';
    session_start();
    $_SESSION['userName'] = $userName;
?>
<!DOCTYPE html>
<html>
    <body background="brownFrog.jpg">
    	<br/>
    	<h1 align="center">Welcome back to the Frog Blog!</h1>
    	<?php echo $userName; ?>
    	<br/>
    	<a href="newBlog.html">Create a new Blog Post</a><br/><br/>
    	<a href="readBlog.php">Read Blogs Fully</a> <br/><br/>	       
    	<button onclick="goBack()">Go Back</button><br/><br/>
    	<script>
        	function goBack(){
        	    window.history.back();
        	}
    	</script><br/>
	<?php $result = $conn->query($sql); ?>
	<table id=blogTable>
	   <tr>
        <th>User Name</th>
        <th>Title</th>
        <th>Category</th>
       </tr> 
       <?php while ($row = $result->fetch_assoc()): ?>
	      <tr>
	        <td> <?php echo $row["userName"]; ?> </td>
	        <td> <?php echo $row["title"]; ?> </td>
	        <td> <?php echo $row["category"]; ?>  </td>
	        </tr>
	    <?php endwhile; ?>
	</table>
	<?php connectionClose(); ?>
	</body>
</html>