<?php

  if(isset($_POST['formlogin'])){
    extract($_POST);

    if(!empty($lemail) && !empty($lpassword)){

      $q = $db->prepare("SELECT * FROM users WHERE email = :email");
      $q->execute(['email' => $lemail]);
      $result = $q->fetch();

      if($result == true){

        $hashpass = $result['password'];
        if(password_verify($lpassword, $result['password'])){
          $_SESSION['id'] = $result['id'];
          $_SESSION['admin'] = $result['admin'];
          $_SESSION['pseudo'] = $result['pseudo'];
          $_SESSION['email'] = $result['email'];
          $_SESSION['date'] = $result['date'];
          $_SESSION['points'] = $result['points'];
          $_SESSION['participationun'] = $result['participationun'];
          $_SESSION['participationdeux'] = $result['participationdeux'];
          $_SESSION['logo'] = $result['logo'];

          header('Location: accueil.php');
          exit();
        }else {
          echo "mot de passe invalide";
        }

      }else {
        echo "Le compte avec l'email " . $lemail . " n'existe pas";
      }



    }else {
      echo "veuillez renseigner tous les champs";
    }

  }

 ?>
