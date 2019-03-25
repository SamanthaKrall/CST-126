<?php
include 'css.css';
include 'functions.php';
$conn = dbConnect();
if (isset($_GET['id'])) {
    try {
        echo $_GET['id'];
        global $conn;
        $sql = "SELECT * FROM blogposts WHERE id = :id";
        $statement = $conn->prepare($sql);
        $statement->bind_result(":id", $id);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $error){
        echo $sql . "<br>" . $error->getMessage();
    }
} else {
    echo "Something went wrong!";
    exit;
}
connectionClose();
?>
