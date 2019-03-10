<html>
<body>
<?php 
session_start();


$firstName="";
$lastName="";
$errors = array();

$db = mysqli_connect('localhost', 'root', 'root', 'activity1');
if(isset($_POST['registerUser'])){
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    
    if(empty($firstName)){
        array_push($errors, "First name is required.");
    }
    if(empty($lastName)){
        array_push($errors, "Last name is required.");
    }
    
}

if(count($errors) == 0) {
    $query = "INSERT INTO users (firstName, lastName) VALUES('$firstName', '$lastName')";
mysqli_query($db, $query);
$_SESSION['firstName'] = $firstName;
$_SESSION['success'] = "You are now logged in";
}
if(count($errors) > 0){
    foreach ($errors as $error) {
        echo $error;
    }
}


?>
</body>
</html>
