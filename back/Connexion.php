<?php 
require 'Model.php';
class Connexion extends Model {

Public function verif() {
  $utilisateur = @$_POST["Login"];
  $util = "SELECT * From users where Username='$utilisateur'";
  $sth = $this->pdo->prepare($util);
  $sth->execute();
  $result = $sth->fetch();
  return $result;
}
}