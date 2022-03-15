<?php
require_once ('Model.php');

class Connexion extends Model {

  public function verif() {

    try {

      $username = $_POST["username"];
      $password = $_POST["password"];
      
      
      $util = "SELECT * From users where Username='$username' and Password='$password'";
      $sth = $this->pdo->prepare($util);
      $sth->execute();
      $result = $sth->fetch();
      $_SESSION['result']=$result;
      
      if (empty($_SESSION['result']) )
          {
      
      echo "Identifiant ou mot de passe incorrect";
      
      header("location:connexion.php");
      echo "Identifiant ou mot de passe incorrect";
      
      }
      
      else {
         
      echo 'connexion réussie '; 
      
      }
      
      }
      
      
      catch (PDOException $e) {
          echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
      }
      

  }
}

$verif =new Connexion();
$util =$verif->verif();



?>