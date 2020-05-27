<?php
session_start();
		// session_unset();
		// session_destroy();
?>
<!DOCTYPE html>

<html>

<head>
	<title>administration</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="backwel">

<header id="encoche">
	<a href="#"><img src="img/logo.png" style="height: 50px;margin: 20px;"></a>
	<h1 class="centretxt" style="color: white;">Ecoapp</h1>
	<?php include 'includes/menunavigation.php' ?>


</header>

<?php

if($_SESSION['admin'] == 1) {

 ?>

<div id="blockcentrale">
<h2> Eleves participant au premier évènement</h2>
<?php

include 'includes/database.php';
$q = $db->query("SELECT pseudo,email FROM users WHERE participationun = 1");
while ($user =$q->fetch()) {
  echo("pseudo : " . $user['pseudo'] . " email : " . $user['email']);
  ?> <br> <?php
}
?>
<h2> Eleves participant au second évènement</h2>
<?php
$q = $db->query("SELECT pseudo,email FROM users WHERE participationdeux = 1");
while ($user =$q->fetch()) {
  echo("pseudo : " . $user['pseudo'] . " email : " . $user['email']);
  ?> <br> <?php
}
}
else {echo("Vous n'avez pas les droits pour accéder à cette page"); }  ?>
</div>


		<footer id="basdepage" style="margin-top: 100px;">
				<div id="plusbasG">
					<span class="seg">© 2019 <a style="color:black" href="/" title="">Ecoapp</a></span>
					<span class="seg"><a style="color:black" href="/policies/privacy-policy">Politique de confidentialité</a></span>
					<span class="seg"><a style="color:black" href="/pages/faq">FAQ</a></span>
					<span class="seg"><a style="color:black" href="/pages/contact">Nous contacter</a></span>
				</div>
				<div id="plusbasD">
					<a href="#" target="_blank" class=""> <img src="https://www.celio.com/medias/sys_master/images/images/h9d/h38/9610330996766/9610330996766.svg?frz-v=1826" alt="twitter celio"> </a>
					<a href="#" target="_blank" class=""> <img src="https://www.celio.com/medias/sys_master/images/images/h1a/h59/9610330865694/9610330865694.svg?frz-v=1826" alt="instagram celio"> </a>
					<a href="#" target="_blank" class=""> <img src="https://www.celio.com/medias/sys_master/images/images/h36/hd2/9610330963998/9610330963998.svg?frz-v=1826" alt="youtube celio"> </a>
				</div>
		</footer>
