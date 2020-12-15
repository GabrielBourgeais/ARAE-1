<?php
	session_start(); 
	$user_id = $_SESSION['user_id'];
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];
	$email = $_SESSION['email'];
	$company_id = $_SESSION['company_id'];
	$manager_id = $_SESSION['manager_id'];
?>

<p>
	Bienvenue sur votre espace personnel <?php echo "$firstname $lastname";?>
</p>