<?php
	session_start(); 
	$user_id = $_SESSION['user_id'];
	$firstname = $_SESSION['firstname'];
	$lastname = $_SESSION['lastname'];
	$email = $_SESSION['email'];
	$company_name = $_SESSION['company_name'];
	$manager_firstname = $_SESSION['manager_firstname'];
	$manager_lastname = $_SESSION['manager_lastname'];
?>

<p>
	Bienvenue sur votre espace personnel <?php echo "$firstname $lastname";?>
</p>