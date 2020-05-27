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
  ?> <br> <?php
}
?>


<? $q = $db->query("SELECT pseudo,points FROM users ORDER BY `points` DESC");
while ($user =$q->fetch()) {
  echo($user['pseudo']);
}
?>
<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td> hello </td>
    <td><?echo($user['pseudo']); ?></td>
    <td>Bill Gates</td>
  </tr>
  <tr>
    <th rowspan="2">Telephone:</th>
    <td>55577854</td>
  </tr>
  <tr>
    <td>55577855</td>
  </tr>
</table>



</div>


</html>
