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
		<button onclick="goBack()">Go Back</button><br/><br/>
    	<script>
        	function goBack(){
        	    window.history.back();
        	}
    	</script><br/>
		<?php $result = $conn->query($sql); ?>
    	<table id=blogTable>
    	   <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Blog</th>
            <th>Category</th>
            <th>Date</th>
            <th>Time</th>
           </tr> 
           <?php while ($row = $result->fetch_assoc()): ?>
    	      <tr>
    	        <td> <?php echo $row["id"]; ?> </td>
    	        <td> <?php echo $row["userName"]; ?> </td>
    	        <td> <?php echo $row["title"]; ?>  </td>
    	        <td> <?php echo $row["subtitle"]; ?> </td>
    	        <td> <?php echo $row["blogPost"]; ?> </td>
    	        <td> <?php echo $row["category"]; ?> </td>
    	        <td> <?php echo $row["date"]; ?> </td>
    	        <td> <?php echo $row["time"]; ?> </td>
    	       </tr>
    	    <?php endwhile; ?>
    	</table>
    	<?php connectionClose(); ?>
	</body>
</html>