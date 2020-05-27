<?php
    if(isset($_POST['formsend'])){

      extract($_POST);
      $q = "UPDATE users SET Classe=1 WHERE id=1";

      $_SESSION['classe'] = $result['classe'];
      header('Location: accueil.php');
      exit();


  }
?>
