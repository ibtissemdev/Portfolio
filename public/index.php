<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../public/css/style.css" rel="stylesheet">
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
            <li class="navbar_link second"><a href="#presentation">Présentation</a> </li>
            <li class="navbar_link third"><a href="portfolio.php">Portfolio</a> </li>
            <li class="navbar_link four "><a href="contact.php">Contact</a> </li>

        </ul>


        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>

    <div class="main-content dark mode" role="main">
        <!--<h1 class="dark mode">Mes projets</h1>-->

        <div class="container">
            <div class="image-wrapper left dark mode"></div>
            <hr>
            <h1 class=" title dark mode" id="title">Développeuse Web</h1>
            <div class="image-wrapper right dark mode"></div>
        </div>
    </div>
    <div class="presentation dark mode">
        <h2 class="dark mode" id="presentation">Ma présentation</h2>

        <p class=" dark mode">Je m'appelle Ibtissem, je suis en formation Développement Web et Web mobile à Onlineformapro depuis novembre 2021 pour un an.</p><br>

        <p class=" dark mode">Avant cela, j'ai suivie la formation Compétence Numérique Fondamentale chez Simplon, vous pouvez avoir un aperçu de tous les modules que j'ai abordé en cliquant <a href="http://cnf3.simplon-chambery.com/apprenants/Ibtissem/projet/">ici</a> .</p>

        <p class=" dark mode">Depuis que j'ai découvert le code dans ma précédente formation, j'ai décidé de devenir développeuse web. C'est un monde tellement vaste, des possibilités infinies, on en apprend tous les jours, d'ailleurs une fois sur mon code, je n'arrive plus à décrocher tant que je n'ai pas obtenu ce dont je voulais.</p>
    </div>

    <script src="main.js"></script>
</body>

</html>