<?php
require 'Projet.php';
$projet=new Projet;

  // Connexion  

  if (!isset($_SESSION['connecte'])) {
    header("location: identification.php");
    //   // echo "Identifiant ou mot de passe incorrect";
  }
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>Ajout projet</title>
</head>
<body>
<form action='' method="post" enctype="multipart/form-data">
         
                 <div class="">
                     <label for="Intitule">Nom du projet</label>
                     <input type="text" name="title" id="title" required>
                 </div>

                 <div class="">
                     <label for="Description">Description</label>
                     <textarea name="description" id="description" cols="30" rows="10" required></textarea>
                 </div>

                 <div class=""> 

                <label for="file">Photo</label>
                <!-- <input type="file" name="Photo" id="Photo" required> -->
                <input type = "file" accept = "image/jpg,image/jpeg,image/gif,image/png" name = "file[]" id = "file" multiple>
                </div> 
                 <div class="">
                     <label for="created_at">Date du projet</label>
                     <input type="date" name="date" id="date" required>
                 </div>
                 <div class="">
                     <label for="link_site">Lien du site</label>
                     <input type="url" name="url_site" id="Prix" required>
                 </div>
                 <div class="">
                     <label for="link_git">Lien du git</label>
                     <input type="url" name="url_git" id="Prix" required>
                 </div>
                 <div>
                 <input type="reset" value="Reset">
                 </div>
                 <div class="">
                     <div id="submit">
                         <input type="submit" name="envoyer" value="Envoyer">
                     </div>
            
             </form>

             
 <?php

function upload () {
    //Boucle qui permet d'uploader plusieurs images
    //print_r($_FILES);
    if(isset($_POST['envoyer'])){
        $countfiles = count($_FILES['file']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['file']['name'][$i];
            $Picture[$i+1]=$filename;

                move_uploaded_file($_FILES['file']['tmp_name'][$i],'images/'.$filename);}
    }

    // var_dump($this->nom[1]);
    echo '<hr>';
    //var_dump($nom);
    echo '<hr>';
}
if (!empty($_POST)) {
   // print_r($_POST);
    print_r($_FILES['file']['name']);
    $filename=$_FILES['file']['name']; 
    $newProjet=$projet->setTitle($_POST['title'])
    ->setDescription($_POST['description'])
    ->setCreated_at($_POST['date'])
    ->setLink_site($_POST['url_site'])
    ->setLink_git($_POST['url_git'])
    ->setPicture1($_FILES['file']['name'][0])
    ->setPicture2($_FILES['file']['name'][1])
    ->setPicture3($_FILES['file']['name'][2])
    ->setPicture4($_FILES['file']['name'][3])
    ->setPicture5($_FILES['file']['name'][4]);

    upload($filename);
    $projet->insert($newProjet);


}?>
             
</body>
</html>