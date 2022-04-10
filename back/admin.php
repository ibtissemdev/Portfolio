<?php
require 'Model.php';
$conn=new Model;
$conn->getPdo();

  if (!isset($_SESSION['connecte'])) {
    header("location: identification.php");
    //   // echo "Identifiant ou mot de passe incorrect";
  } ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>backoffice</title>
</head>
<body>
<button class="btn btn-secondary"><a href="deconnexion.php">Deconnexion</a></button>
<button class="btn btn-secondary"><a href="formulaire.php">Ajouter</a></button>
    <h1>Mes projets</h1>
</body>
</html>