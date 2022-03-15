<?php
require_once ('Model.php');

class Compte extends Model {
    
    public function user($username,$password) {

        try {
    
    
            $sth = $this->pdo->prepare("
            INSERT INTO users (Username, Password)
            VALUES (:username, :password)");
        
          $sth->bindParam(':username',$username);
          $sth->bindParam(':password',$password);
          $sth->execute();
        
        }
            
            catch (PDOException $e) {
                echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
            }
    }
   
}
$compte =new Compte ();
$util= $compte->user('Ibtissem','Decembre1985');

?>