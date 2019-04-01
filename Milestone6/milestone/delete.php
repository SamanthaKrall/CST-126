<?php
include 'css.css';
include 'functions.php';
$conn = dbConnect();

if(isset($_POST["id"]) && !empty($_POST["id"])){
    $sql = "DELETE FROM blogposts WHERE id = ?";
    if ($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, i, $param_id);
        $param_id = trim($_POST["id"]);
        if (mysqli_stmt_execute($stmt)){
            header("Location: mainBlogPage.php");
            exit();
        } else {
            echo "Something went wrong.";
        }
    }
    mysqli_close($link);
} else {
    if(empty(trim($_GET["id"]))){
        header("Location: error.php");
        exit();
    }
}
$close = connectionClose();
?>
<html>
<body>
	<br/>
	    <div class="topnav">
			<a href="mainBlogPage.php">Home</a>
			<button onclick="goBack()">Go Back</button>
			<a href="logout.php"><button>Logout</button></a>
		</div>
		<script>
			function goBack(){
				window.history.back();
			}
		</script>
		<br>
	<p>Are you sure you want to delete this record?</p><br/>
	<input type="submit" value="Yes">
	<a href="mainBlogPage.php" class="btn btn-default">No</a>
</body>
</html>