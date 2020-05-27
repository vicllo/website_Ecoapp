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

<body id="topbannier">


<header id="encoche">
	<a href="#"><img src="img/logo.png" style="height: 50px;margin: 20px;"></a>
	<h1 class="centretxt" style="color: white;">Ecoapp</h1>
	<?php include 'includes/menunavigation.php' ?>


</header>

<?php
include 'includes/database.php';
$logo = $_SESSION['logo'];
 ?>
<div id="carte">
<center>
<img id="ldblogoECO" src="<?php echo $logo ?>" alt="logoclub" style="border-radius: 1000px 1000px 1000px 1000px;border: 1px solid #009f3c;margin: 16px;" width="150" height="150">
<form method="post" id="interblockinscr">
	<input class="cone1" type="url" name="logo" id="logo" placeholder="Lien vers le nouveau logo" required><br/>
	<input class="cone1" type="submit" name="formlogin" id="formlogin" value="Changer">
</form>



<?php
if(isset($_POST['formlogin'])){
	extract($_POST);
	$file = @fopen($logo, 'r');
	if ($file) {
		if(getimagesize($logo) !== false) {
	$q = $db->prepare("UPDATE `users` SET `logo`=:logo WHERE id={$_SESSION['id']};");
	$q->execute(['logo' => $logo]);
	$_SESSION['logo'] = $logo;
	header('Location: profil.php');
	exit();
}

else {echo("Pas de photo trouvée à cet URL");}


}
else{ echo("Ce site n'existe pas");}

  }?>
</center>

</div>

<footer id="basdepage" style="margin-top: 300px;">
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

</body>
</html>
