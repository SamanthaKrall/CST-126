<?php
include 'myfuncs.php';
$searchPattern = $_POST['pattern'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "activity1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("<br/>Connection failed: " . $conn->connect_error);
}
$select = "SELECT * FROM users WHERE firstName LIKE '%" . $searchPattern . "%' ";
$captured = $conn->query($select);
if ($captured->num_rows > 0){
    while ($row = $captured->fetch_assoc()){
        echo "ID: " . $row["ID"] . " Name: " . $row["firstName"] . " " . $row["lastName"] . "<br/>";
    }
} else {
    echo "There are no matches that meet the search criteria.";
}
$conn->close();

?>