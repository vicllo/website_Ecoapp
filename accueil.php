<?php
session_start();
		// session_unset();
		// session_destroy();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="backwel">

<header id="encoche">
	<a href="#"><img src="img/logo.png" style="height: 50px;margin: 20px;"></a>
	<?php include 'includes/menunavigation.php' ?>


</header>


<div id="interblockinscr">
	<div id="entrepagetexte">
		<p>Changer la planète</p>
	</div>

	<div id="blockcentrale">
		<h1 style="color: #009f3c;border-radius: 10px 10px 10px 10px;border: 5px double black;width: 333px;margin: auto;margin-top: 20px;">Missions de la semaine</h1>

		<center id="entryimg">

			<div id="gere2carre">
				<div id="carreDconnect">
					<h2> Mission 1 : Apporter son soutien à la plantation du lycée</h2>
					<div id="imagepade">
						<img src="img/imgMission/U3.png" style="width: auto;height: 200px;margin: 10px;">
					</div>
					<form method="post">
						<?php if($_SESSION['participationun'] == 0){ ?>
						<input class="cone" type="submit" name="participationun" id="participationun" value="M'inscrire">
					<?php }
					elseif ($_SESSION['participationun'] == 1) { ?>
						<input class="cone" type="submit" name="participationun" id="participationun" value="Me désinscrire">
				<?php	} ?>
					</form>

<?php
include 'includes/database.php';
	if($_SESSION['participationun'] == 1){
	?> <h1 style="color: green;"> ✔ </h1>  <?php
	}
	  if(isset($_POST['participationun'])){
		extract($_POST);
		if($_SESSION['participationun'] == 0){
			  $q = $db->prepare("UPDATE users SET participationun=1 WHERE id={$_SESSION['id']};");
			  $q->execute([ 'participationun' => "1", ]);
			  $_SESSION['participationun'] = "1";
		}
		else {
		  $q = $db->prepare("UPDATE users SET participationun=0 WHERE id={$_SESSION['id']};");
		  $q->execute(['participationun' => "0",]);
		  $_SESSION['participationun'] = "0";
		}
		header('Location: accueil.php');
		exit();
	  } else {}
	 ?>

				</div>
				<div id="carreDconnect">
					<h2> Mission 2 : Réaliser une conférence au lycée </h2>
					<div id="imagepade">
						<img src="img/imgMission/U2.png" style="width: auto;height: 200px;margin: 10px;">
					</div>
					<form method="post">
						<?php if($_SESSION['participationdeux'] == 0){ ?>
						<input class="cone" type="submit" name="participationdeux" id="participationdeux" value="M'inscrire">
					<?php }
					elseif ($_SESSION['participationdeux'] == 1) { ?>
						<input class="cone" type="submit" name="participationdeux" id="participationdeux" value="Me désinscrire">
				<?php	} ?>
					</form>

 <?php
	if($_SESSION['participationdeux'] == 1){
	 ?> <h1 style="color: green;"> ✔ </h1>  <?php
	 }
	   if(isset($_POST['participationdeux'])){
		 extract($_POST);
		 if($_SESSION['participationdeux'] == 0){
			   $q = $db->prepare("UPDATE users SET participationdeux=1 WHERE id={$_SESSION['id']};");
			   $q->execute([ 'participationdeux' => "1", ]);
			   $_SESSION['participationdeux'] = "1";
		 }
		 else {
		   $q = $db->prepare("UPDATE users SET participationdeux=0 WHERE id={$_SESSION['id']};");
		   $q->execute(['participationdeux' => "0",]);
		   $_SESSION['participationdeux'] = "0";
		 }
		 header('Location: accueil.php');
		 exit();
	   } else {}
  ?>

				</div>
			</div>
		</center>
	</div>
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
</div>



</body>

</html>
