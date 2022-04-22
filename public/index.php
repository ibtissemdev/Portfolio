<!DOCTYPE html>
<html lang="en">

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
            <li class="navbar_link first"><a href="#">Accueil</a> </li>
            <li class="navbar_link second"><a href="#">Présentation</a> </li>
            <li class="navbar_link third"><a href="#">Portfolio</a> </li>
            <li class="navbar_link four "><a href="#">Contact</a> </li>

        </ul>


        <button class="burger">
            <span class="bar"></span>
        </button>
    </nav>

    <main class="main-content dark mode" role="main">
        <!--<h1 class="dark mode">Mes projets</h1>-->

        <div class="container">
      <div class="image-wrapper left"></div>
      <hr>
      <h1 id="title">Développeuse Web</h1>
      <div class="image-wrapper right"></div>
    </div>

    </main>

    <script src="main.js"></script>
</body>

</html>