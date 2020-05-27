<div id="nav">
  <a href="accueil.php" style="color: white;">accueil</a>
  <a href="missions.php" style="color: white;">missions</a>
<?php if($_SESSION['admin'] == 1){	?>
  <a href="administration.php" style="color: white;">administration</a>
<?php } ?>
  <a href="classements.php" style="color: white;">classements</a>
  <a href="profil.php" style="color: white;">profil</a>
  <a href="includes/logout.php" style="color: white;" > déconnexion  </a>
</div>
