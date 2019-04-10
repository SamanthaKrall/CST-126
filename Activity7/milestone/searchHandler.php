<?php
include 'css.css';
include 'functions.php';
$conn = dbConnect();
$search = $_POST['search'];
$sql = "SELECT * FROM blogposts WHERE userName LIKE '$search%' OR '%$search' ";
?>
<html>
<body>
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