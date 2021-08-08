<?php
		$title = 'Home page';
		require_once('Header.php');

	?>

	<h1>Welcome home! <?=$_SESSION['username']?> </h1>

	<nav>
	
		<a href="Delete.php">Delete Employer</a> |
		<a href="Update.php">Update Employer</a> |
		<a href="View_Users.php">View Employer</a> |
		<a href="../controller/Logout.php">logout</a>
	</nav>

	<br>
	<br>
	<br>

	<div>
		
	</div>

<?php include('Footer.php'); ?>