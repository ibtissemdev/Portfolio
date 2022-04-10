<?php
require 'Projet.php';
$projet=new Projet;
$projet->getPdo();


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
<form action='insertProject.php' method="post" enctype="multipart/form-data">
         
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
                <input type = "file" accept = "image/jpg,image/jpeg,image/gif,image/png" name = "file" id = "file" multiple>
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
if (!empty($_POST)) {
    $newProjet=$project->setNom($_POST['title'])
    ->setPrenom($_POST['description'])
    ->setMail($_POST['date'])
    ->setTelportable($_POST['url_site'])
    ->setSexe($_POST['url_git']);
}?>
             
</body>
</html>