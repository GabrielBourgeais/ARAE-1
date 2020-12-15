<!DOCTYPE html>
<html>
<head>
	<title>CONNEXION</title>
	<link rel="stylesheet" type="text/css" href="styleConnexion.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<nav id="menu">
			<ul>
				<li><a href="index.html">HOME</a></li>	<!-- voir Jquery pour le scroll-->
				<li><a href="index.html#ptolemeeSection" class="anchor-scroll" data-class-to="ptolemeeSection" data-on-scroll="blur-effect">LA SOLUTION PTOL&EacuteM&EacuteE</a></li>
				<li><a href="index.html#infiniteMeasureSection" class="anchor-scroll" data-class-to="infiniteMeasureSection" data-on-scroll="blur-effect">INFINITE MEASURE</a></li>
				<li id="connexionButton"><a href="connexion.php">CONNEXION</a></li>
			</ul>
		</nav>
	</header>


	<section id="idSection">
		<form action="checkPswd.php" method="post">
					<!-- voir double identification : pseudo ou adr_mail -->

                <label for="id">Email</label>
                <br>
                <input type="text" id="id" name="id">
                <br>
                <label for="password">Mot de passe</label>
                <br>
                <input type="password" id="password" name="password" minlength="8">
                <br><br>
                <!--<div>
                    <input type="radio" id="Oui" name="doubleAuth" value="Oui1">
                    <label for="Oui1">Oui</label>

                    <input type="radio" id="Non" name="doubleAuth" value="Non1">
                    <label for="Non1">Non</label>
                </div>-->
				<!-- renommer-->
				<input class="button" type="submit" name="submit" value="Verifier" />
	            <input class="button" type="reset" name="reset" value="Reset" />

	            <div class="accountCreation">
		            <p>Vous n'avez pas encore de compte ?</p>
		            <a href="signIn.php">JE CRÉE MON COMPTE</a>
	            </div>

			</form>
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