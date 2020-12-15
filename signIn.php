<!DOCTYPE html>
<html>
<head>
	<title>CONNEXION</title>
	<link rel="stylesheet" type="text/css" href="styleSignIn.css">
</head>
<body>
	<header>
		<nav id="menu">
			<ul>
				<li><a href="index.html">HOME</a></li>	<!-- voir Jquery pour le scroll-->
				<li><a href="#ptolemeeSection" class="anchor-scroll" data-class-to="ptolemeeSection" data-on-scroll="blur-effect">LA SOLUTION PTOL&EacuteM&EacuteE</a></li>
				<li><a href="#infiniteMeasureSection" class="anchor-scroll" data-class-to="infiniteMeasureSection" data-on-scroll="blur-effect">INFINITE MEASURE</a></li>
				<li id="connexionButton"><a href="connexion.php">CONNEXION</a></li>
			</ul>
		</nav>
	</header>


	<section id="idSection">
		<form>	
				<p>Nom : <br>
					<input type="text" name="nom" id="id" placeholder="Entrer votre nom"></p>
				<p>Pr&eacutenom : <br>
					<input type="text" name="prenom" id="id" placeholder="Entrer votre prénom"></p>

					<!-- voir double identification : pseudo ou adr_mail -->

				<p>Adresse mail : <br>
					<input type="text" name="mail" id="id" placeholder="Entrer votre adresse e-mail"></p>
				<p>Mot de passe : <br>
					<input type="text" name="password" id="password" placeholder="Entrer votre mot de passe"></p>
					
					<!-- renommer-->

				<input class="button" type="submit" name="submit" value="Verifier" />
	            <input class="button" type="reset" name="reset" value="effacer les reponses" />

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