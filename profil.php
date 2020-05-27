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
$logo = $_SESSION['logo'];
 ?>
<div id="carte">
<center>
<img id="ldblogoECO" src="<?php echo $logo ?>" alt="logoclub" style="border-radius: 1000px 1000px 1000px 1000px;border: 1px solid #009f3c;margin: 16px;" width="150" height="150">

</center>
 <?php

  include 'includes/database.php';
  if(isset($_SESSION['pseudo'])) {
		$q = $db->prepare("SELECT points FROM users WHERE id={$_SESSION['id']};");
		$q->execute();
		$result = $q->fetch();
		$_SESSION['points'] = $result['points'];
  				?>
				<p id="texteprofil" href="#">   Votre pseudo : <?php echo $_SESSION['pseudo'];?>
  				<p id="texteprofil" href="#">  <?php echo $_SESSION['points'] ?> points <?php

        }else{
          echo "erreur";
        } ?>
<p></p>
<center><a id="bbmodif" href="modiflogo.php" >modifier avatar </a></center>
<p></p>
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
