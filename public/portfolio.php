<?php
require '../back/Projet.php'; 
$projet= new Projet;
$resultat = $projet-> findAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link href="../public/css/style.css" rel="stylesheet"> -->
    <title>Accueil</title>
</head>


<body>
    <nav class="navbar light mode show-nav" role="navigation">
        <div class="navbar_logo"><img src="logo.rond.png" alt="" width="40px"></div>

        <div class="switch">
            <p id="dark-mode">Mode dark</p>
            <label class="ck_label" id="ck_label">
                <input type="checkbox" id="ch1" name="ch1" class="btn_chb" />
                <span id="snon"></span>
                <span id="soui"></span>
                <span id="round"></span>
            </label>
            <p id="light-mode">Mode light</p>
        </div>
        <ul class="navbar_links">
            <li class="navbar_link first"><a href="index.php">Accueil</a> </li>
            <li class="navbar_link second"><a href="#">Présentation</a> </li>
            <li class="navbar_link third"><a href="portfolio.php">Portfolio</a> </li>
            <li class="navbar_link four "><a href="#">Contact</a> </li>

        </ul>


        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>

    <main class="main-content dark mode" role="main">
        <h1 class="light mode">Mes projets</h1>-->

        <?php 
foreach ($resultat as $projet)
echo '<pre>' , print_r($projet) , '</pre>' ; 


        ?>




    </main>

    <script src="main.js"></script>
</body>

</html>