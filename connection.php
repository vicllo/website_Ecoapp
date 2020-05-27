<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Ecoapp</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="backinscr">
<div id="blocklog">
	<img  id="ldblogoECO" src="https://i2.wp.com/ecoapp.fr/wp-content/uploads/2019/01/cropped-Logo-V.01-Wordpress.png?fit=708%2C726&ssl=1" alt="logoclub" width="150" height="150">
	<h1>Login</h1>
	
    <form method="post" id="interblockinscr">
      <input class="cone1" type="email" name="lemail" id="lemail" placeholder="Votre email" required><br/>
      <input class="cone1" type="password" name="lpassword" id="lpassword" placeholder="Votre mot de passe" required><br/>
      <input class="cone1" type="submit" name="formlogin" id="formlogin" value="Login">
    </form>
  <?php
  include 'includes/database.php';
  include 'includes/login.php';
       ?>
</html>
