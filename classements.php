<?php
session_start();
		// session_unset();
		// session_destroy();
?>
<!DOCTYPE html>

<html>

<head>
  <title>Profil</title>
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
<div id="carte">
<?php

include 'includes/database.php';
$i = 0;
$q = $db->query("SELECT pseudo,points FROM users ORDER BY `points` DESC");
while ($user =$q->fetch()) {
  $i = $i + 1;
  echo($i . " : " . $user['pseudo'] . " points : " . $user['points']);
  ?> <br>
 <?php
}
?> </div> <div id="carte"> <?php
$pointsclasse = array(0,0,0);
$i = 0;
$q = $db->query("SELECT points,classe FROM users");
while ($user =$q->fetch()) {
  $i = $i + 1 ;
  $pointsclasse[$user['classe']] = $pointsclasse[$user['classe']]+$user['points'];
}
echo("Terminale : " . $pointsclasse[0] . " points");
?> <br> <?php
echo("Première : " . $pointsclasse[1] . " points");
?> <br> <?php
echo("Seconde : " . $pointsclasse[2] . " points");



?>

 </div>
</html>
