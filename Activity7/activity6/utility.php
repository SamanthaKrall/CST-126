<?php
// Samantha Krall CST-126

include ('myfuncs.php');
function getAllUsers(){
    $index;
    $users=array();
    $connect = dbConnect();
    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $index;
            $users[$index] = array($row["id"], $row["firstName"], $row["lastName"]);
            ++$index;
        }
    }
    return $users;
}
function getUsersByFirstName(){
    $index;
    $users = array();
    $connect = dbConnect();
    global $searchPattern;
    $sql = "SELECT firstName FROM users";
    $result = $connect->query($sql);
    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            global $index;
            $users[$index] = array($row["id"], $row["firstName"], $row["lastName"]);
            ++$index;
        }
    }
    return $users;
}
function insertUsers(){
   $conn = dbConnect();
   $sql = "SELECT id, firstName, lastName FROM users";
   $result = $conn->query($sql);
   if ($result->num_rows == 0){
       echo "<b>There are no users in the database.</b>";
   }
   $index = 0;
   $users = array();
   while ($row = $result->fetch_assoc()){
       $users[$index] = array($row['id'], $row['firstName'], $row['lastName']);
       ++$index;
   }
   $conn->close();
   return $users;
}
?>