<?php
session_start();
		// session_unset();
		// session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Ecoapp</title>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo.png" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="backinscr">
<div id="blockinscr">
	<img  id="ldblogoECO" src="https://i2.wp.com/ecoapp.fr/wp-content/uploads/2019/01/cropped-Logo-V.01-Wordpress.png?fit=708%2C726&ssl=1" alt="logoclub" width="150" height="150">
	<h1>Sign in</h1>



		<form method="post" id="interblockinscr">
			<label for="classe">choisissez votre classe</label>
			<select name="classe" id="classe">
			    <option value="2">Seconde</option>
			    <option value="1">Première</option>
			    <option value="0">Terminale</option>

			    </select>
			 <input class="cone1" type="submit" name="formsend" id="formsend" value="OK">
		</form>

</div>

<?php
include 'includes/database.php';
include 'includes/postsignin.php'

?>
</body>
</html>
