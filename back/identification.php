<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Formulaire</title>
</head>

<body>


  <div class="container connexion">

    <h1>Identification</h1>

    <form class="row g-3 formconnexion" action="" method="post">
      <div class="col-md-10">

        <label for="identifiant" class="form-label">Identifiant</label>
        <input type="text" maxlength="20" pattern="^[A-Za-zéè '-]+$" class="form-control" name="Username" id="identifiant" placeholder="Entrer votre identifiant" required>
      </div>

      <div class="col-md-10">
        <label for="motdepasse" class="form-label">Mot de passe</label>
        <input type="password" pattern="^[A-Za-zéè0-9 '-]+$" maxlength="20" class="form-control" name="Password" id="motdepasse" placeholder="Entrer le mot de passe" required>
      </div>

      <a class="mdp" href="recup.php">Mot de passe oublié</a>

      <div class="col-md-10 capt">
        <p>Vérification code </hp>
        <img src="captcha.php" style="width:80px" alt="captcha">
        <input type="text" name='captcha'>
      </div>

      <div class="col-md-10">
        <input type="submit" name='submit' id='submit' value='CONNEXION'>
      </div>

    </form>

    <button class="btn btn-secondary btnconnexion"><a href="inscription.php">Je n'ai pas de compte</a></button>
  </div>
</body>

<?php

require 'Connexion.php';

 $conn= new Connexion;


    if (isset($_POST['captcha'])) {

      if ($_POST['captcha'] == $_SESSION['captcha']) {
  
        $_SESSION = array();
        if (isset($_POST['submit'])) {

          $result=$conn->findBy(["Username"=>$_POST["Username"]]);
  
          if (@$_POST["Password"] == $result['Password']) {
            $_SESSION['result'] = $result;
           // error_log("Connection successful");
           echo 'connexion réussie'; 
          } else {
           // error_log("Connection NOT successful");
           echo 'mot de passe erroné';

            //header("location:index.php");
          }
        }
  
        if (empty(@$_SESSION['result'])) {
          echo "<p class='entrer'>Identifiant ou mot de passe incorrect !</p>";
        } else {
          //echo 'connexion réussie '; 
          $_SESSION['connecte'] = TRUE;
          //$_SESSION['user_id']=$result['Id']; 
          header("location:admin.php");
        }
      } else {
        echo '<h3 class="captcha">La vérification de code est invalide !</h3> ';
      }
    }
 
?>