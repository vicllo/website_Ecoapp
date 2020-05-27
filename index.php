<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Ecoapp</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<body id="assembleurgene">

<header id="encoche">
	<img src="img/logo.png" id="ldblogoGmain">
	<h1 class="centretxt" style="color: white;">Ecoapp</h1>
	<a  href="https://0781861z.index-education.net/pronote/eleve.html"> <img id="ldblogo" src="img/logomarly.png"> </a>
</header>

	<center id="entryimg">
		<div id="textGetB">
		  <p>Bienvenue sur Ecoapp</p>
		  <p>la nouvelle appli eco-citoyenne.</p>
		</div>
		<div id="gere2carre">
			<div id="carreDconnect">
				<h2> Pour les anciens</h2>
				<h3>vous connaissez le chemin</h3>
				<a id="cone" href="connection.php">Connectez-vous maintenant</a>
			</div>
			<div id="carreDconnect">
				<h2> Pour les nouveaux</h2>
				<h3>c'est ici pour s'incrire</h3>
				<a id="cone" href="inscription.php">Inscrivez-vous maintenant</a>
			</div>
		</div>

	</center>

<?php

	if (isset($_POST['formsend'])) {

		if (!empty($pseud) && !empty($age) && !empty($nom)) {
			extract($_POST);
			echo $age;
			echo $nom;
			echo $pseud;

		}else{
			echo "champs invalides";
		}

	}

?>
</body>

<!-- Pied de page -->
<footer id="basdepage">
		<div id="plusbasG">
			<span class="seg" style="margin: auto;">© 2019 <a id="textebasencoche" href="pagebas/Ecoapp.html" title="">Ecoapp</a></span>
			<span class="seg" style="margin: auto;"><a id="textebasencoche" href="pagebas/Politiqueconf.html">Politique de confidentialité</a></span>
			<span class="seg" style="margin: auto;"><a id="textebasencoche" href="pagebas/FAQ.php">FAQ</a></span>
			<span class="seg" style="margin: auto;"><a id="textebasencoche" href="pagebas/Nouscontacter.html">Nous contacter</a></span>
		</div>
		<div id="plusbasD">
			<a href="#"> <img id="imgbaslogoreseau" src="img/logoreseau/logoT.png" alt="twitter"> </a>
			<a href="#"> <img id="imgbaslogoreseau" src="img/logoreseau/logoI.png" alt="instagram"> </a>
			<a href="#"> <img id="imgbaslogoreseau" src="img/logoreseau/logoY.png" alt="youtube"> </a>
		</div>
</footer>

</html>
