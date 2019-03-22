<?php
// Samantha Krall CST-126

require_once('myfuncs.php');
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
?>