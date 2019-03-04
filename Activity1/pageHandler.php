<html>
<body>
<?php  
if (!isset($_POST['firstName']) || !isset($_POST['lastName'])){
    echo "<p>You have not entered all the required details. <br />
        Please go back and try again.< /p>";
    exit;
}
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
@$db = new mysqli('localhost', 'root', 'root', 'activity1');

if (mysqli_connect_errno()){
    echo "<p>Error: Could not establish connection to database.<br />
        Please try again later.</p>";
    exit;
}
$query = "INSERT INTO users (FIRST_NAME, LAST_NAME) VALUES (?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param($firstName, $lastName);
$stmt->execute();
if ($stmt->affected_rows > 0){
    echo "<p>User has been entered into the database.</p>";
}else {
    echo "<p>An error has occurred.<br/>
        The user has not been added.</p>";
}
$db->close();
?>
</body>
</html>
