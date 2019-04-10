<?php
include 'css.css';
?>
<html>
<body background="frogReading.jpg">
	<h1 align="center" style="color:violet">Search for Users</h1>
	<form method="post" align="center" style="color:firebrick">
		User name you want to find:
		<br><br>
		<input type="text" name="search" placeholder="User Name"></br><br>
		<input type="submit" formaction="searchHandler.php" value="Submit" name="Submit">
	</form>
	<br><br>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack() {
			window.history.back();
		}	
	</script>
</body>		
</html>