<?php
   //Samantha Krall CST-126
    include 'functions.php';
    $conn = dbConnect();
    $sql = "SELECT userName, title, category FROM blogposts";
    include 'css.css';
    session_start();
?>
<!DOCTYPE html>
<html>
    <body background="brownFrog.jpg">
    	<h1 align="center">Welcome back to the Frog Blog!</h1>
    	<?php echo $_SESSION['userName'] ?>
    	<div class="topnav">
			<a href="mainBlogPage.php"><button>Home</button></a>
			<button onclick="goBack()">Go Back</button>
			<a href="logout.php"><button>Logout</button></a>
		</div>
		<script>
			function goBack(){
				window.history.back();
			}
		</script>
		<br>
    	<br/>
    	<section>
    		<nav>
    			<ul>
                	<li><a href="newBlog.html">Create a new Blog Post</a></li>
                	<br/><br/>
                	<li><a href="readBlog.php">Read Blogs Fully</a></li> 
                	<br/><br/>	
    			</ul>
    		</nav>
    	<article>       
			<?php $result = $conn->query($sql); ?>
			<table id=blogTable>
	   		<tr>
        		<th>User Name</th>
        		<th>Title</th>
        		<th>Category</th>
       		</tr> 
       		<?php while ($row = $result->fetch_assoc()): ?>
	      	<tr>
	        	<td> <?php echo $row["userName"]; ?> </td>
	        	<td> <?php echo $row["title"]; ?> </td>
	        	<td> <?php echo $row["category"]; ?>  </td>
	        </tr>
	    	<?php endwhile; ?>
			</table>
			<?php connectionClose(); ?>
        </article>
        </section>
	</body>
</html>