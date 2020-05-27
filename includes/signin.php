<?php
session_start();

    if(isset($_POST['formsend'])){

      extract($_POST);


      if(!empty($password) && !empty($cpassword) && !empty($email)){
        if($password == $cpassword){


            $options = [
              'cost' => 12,
            ];

            $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);


            $c = $db->prepare("SELECT email FROM users WHERE email = :email");
            $c->execute(['email' => $email]);

            $result = $c->rowCount();

            if($result == 0){

              $c = $db->prepare("SELECT pseudo FROM users WHERE pseudo = :pseudo");
              $c->execute(['pseudo' => $pseudo]);

              $result = $c->rowCount();

              if($result == 0){
              $q = $db->prepare("INSERT INTO users(admin,pseudo,email,classe,password,points,participationun,participationdeux,logo) VALUES(:admin,:pseudo,:email,:classe,:password,:points,:participationun,:participationdeux,:logo)");
              $q->execute([
                'admin' => "0",
                'pseudo' => $pseudo,
                'email' => $email,
                'classe' => $classe,
                'password' => $hashpass,
                'points' => "0",
                'participationun' => "0",
                'participationdeux' => "0",
                'logo' => "https://static.thenounproject.com/png/2611414-200.png"
              ]);
              $q = $db->prepare("SELECT * FROM users WHERE email = :email");
              $q->execute(['email' => $email]);
              $result = $q->fetch();

              if($result == true){
                echo "OK";
                $_SESSION['admin'] = $result['admin'];
                $_SESSION['id'] = $result['id'];
                $_SESSION['pseudo'] = $result['pseudo'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['classe'] = $result['classe'];
                $_SESSION['points'] = $result['points'];
                $_SESSION['participationun'] = $result['participationun'];
                $_SESSION['participationdeux'] = $result['participationdeux'];
                $_SESSION['logo'] = $result['logo'];

                header('Location: accueil.php');
                exit();
}
            }else{
              echo "ce pseudo existe déjà";
            }
            }else{
              echo "cet email est déjà enregistré";
            }
      }else{
        echo "les deux mots de passe ne coincident pas";
      }
    }
  }
?>
