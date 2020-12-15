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

<html>
<head>
	<title>PROFIL</title>
	<link rel="stylesheet" type="text/css" href="styleUserProfilePage.css">
</head>
<body>
	<header>
		<nav id="menu">
			<ul>
				<li><a href="index.html">HOME</a></li>	<!-- voir Jquery pour le scroll-->
				<li><a href="#ptolemeeSection" class="anchor-scroll" data-class-to="ptolemeeSection" data-on-scroll="blur-effect">LA SOLUTION PTOL&EacuteM&EacuteE</a></li>
				<li><a href="#infiniteMeasureSection" class="anchor-scroll" data-class-to="infiniteMeasureSection" data-on-scroll="blur-effect">INFINITE MEASURE</a></li>
				<li>
					<?php 
						$timeOfDay = 'Bonjour';
						date_default_timezone_set("Europe/Paris");
						if (intval(date('H')) >= 17)
						{
							$timeOfDay = 'Bonsoir';
						}
						echo "<a href='userProfilePage'>$timeOfDay $firstname</a>";
					?></li>
				<li id="mailAccesButton"><a href="">MAIL</a></li>
				<!-- je vais changer le texte avec une image-->
			</ul>
		</nav>
	</header>

	<section id="secondMenu">
		<nav>
			<ul>
				<li>Action 1</li>
				<li>Action 2</li>
			</ul>
		</nav>
		
	</section>

	<section id="profileMenuBlockDisplay">
		<table>
			<thead>
				<tr>
					<th>Menu diff actions</th> <!-- à changer ultérieurement-->
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Action 1</td>
					<td>Action 2</td>
				</tr>
			</tbody>
			
		</table>
		
	</section>









	<div class="footer">
  			<div id="button"></div>
				<div id="container">
					<div id="cont">
						<div class="footer_center">
	   						<h3>Contenu</h3>
	   						<p>dfcgvhjnkjhgbfdxcfghjkl</p>
						</div>
					</div>
				</div>
		</div>

</body>
</html>