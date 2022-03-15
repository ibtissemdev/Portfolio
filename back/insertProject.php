<?php
require 'app\models\Model.php';


class Projet extends Model {

    public function upoload(){
        if (isset ($_POST['envoyer'])){

            echo 'ok';
            
            
            if (isset ($_FILES['file'])) {
            
                $tmpName = $_FILES['file']['tmp_name'];
                $fileName = $_FILES['file']['name'];
                $size=$_FILES['file']['size'];
                $error=$_FILES['file']['error'];
                $type = $_FILES['file']['type'];
            
                $tabeExtention = explode('.',$fileName);
                $extension= strtolower(end($tabeExtention));
            
                $extensionsAutorisees=['jpg', 'jpeg', 'gif', 'png', 'webp'];
                $maxSize=200000;
            
            if (in_array($extension, $extensionsAutorisees,) && $size <= $maxSize && $error == 0 ) {
            
                move_uploaded_file($tmpName, './images/'. $fileName); }
            
            $sql= $this->$pdo->prepare ('INSERT INTO image (image) VALUES (?)');
            $sql->execute([$fileName]);
            echo 'image enregistrée';
            }
                else {
                    echo 'Mauvaise extension ou taille trop importante ou erreur';
                }
            
            } 


    }


    public function insert ($colTitle,$colDescription, $colPicture, $colCreatedAd, $colLinkSite,$colLinkGit,$title, $description, $createdAd, $linkSite, $linkGit ){
            try{
                $sql= $this->pdo->prepare ("INSERT INTO projects ($colTitle,$colDescription, $colPicture, $colCreatedAd, $colLinkSite,$colLinkGit)
                        VALUES(:$colTitle,:$colDescription, :$colPicture,:$colCreatedAd, :$colLinkSite,:$colLinkGit)");

                $countfiles = count($_FILES['file']['name']);       
                for ($i=1;$i<$countfiles+1;$i++){
                    $sql->bindParam(':photo'.$i,$this->nom[$i]);
                    // $this->nom[1],$this->nom[2],$this->nom[3],$this->nom[4],$this->nom[5]
                }  
                $sql->bindParam(':'.$colTitle,$title);
                $sql->bindParam(':'.$colDescription,$description);
                $sql->bindParam(':'.$colCreatedAd,$createdAd);
                $sql->bindParam(':'.$colLinkSite,$linkSite);
                $sql->bindParam(':'.$colLinkGit,$linkGit);
                $sql->execute();
                echo 'Entrée ajoutée dans la table';
            }
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
        }


    }



?>