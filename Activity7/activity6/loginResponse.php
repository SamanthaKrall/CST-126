<?php
// Samantha Krall CST-126

require_once ('utility.php');
insertUsers();
$users = getAllUsers();
include ('_displayUsers.php');
include 'myfuncs.php';

?>
<html>
<body>
	<table>
		<tr>
			<th>Users</th>
		</tr>
		<?php while ($row = $result->fetch_assoc()): ?>
	    <tr>
	    	<td><?php echo $row['userName']; ?></td>
	    </tr>
	    <?php endwhile; ?>
	</table>
	<?php connectionClose(); ?>
</body>
</html>