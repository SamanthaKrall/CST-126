<?php
// Samantha Krall CST-126

$user = $_POST["username"];
$pass = $_POST["password"];

?>
<html>
<body>
    <h2>Login was successful <?php echo " " . $user?> </h2>
	<a href="whoAmI.php">Who am I</a>
</body>
</html>