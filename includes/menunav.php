<nav class="menu-nav">
	<ul>
		<li class="btn">
			<a href="accueil.php">Accueil</a>
		</li>
		<li class="btn">
			<a href="index.php">Index</a>
		</li>
		<li class="btn">
			<a href="profil.php">Profil</a>
		</li>
		<li class="btn">
			<a href="includes/logout.php">Déconnection</a>
		</li>
		<?php if($_SESSION['admin'] == 1){	?>
			<li class="btn">
				<a href="administration.php">administration</a>
			</li> <?php
			
		}?>

	</ul>
</nav>
