<?php
session_start();
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$doubleAuthCode = $_SESSION['doubleAuthCode'];
$alors = $_SESSION['alors'];
?>

<head>
	<link rel="stylesheet" type="text/css" href="styleConnexion.css">
</head>


<section id="idSection">
		<form action="checkDoubleAuth.php" method="post">

                <label for="userDACode">Code</label>
                <br>
                <input type="text" id="id" name="userDACode">
                <br>

				<input class="button" type="submit" name="submit" value="Verifier Code" />
	            <input class="button" type="reset" name="reset" value="Reset" />

			</form>

<p>
	Code: <?php echo "$doubleAuthCode $alors" ?>
</p>

<?php
















?>