<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<form action="../models/Connexion.php" method="post" >
            
              <label for="identifiant" >Identifiant</label>
              <input type="text"  maxlength="20"  name="username" id="username" placeholder="Entrer votre identifiant" required>
           
              <label for="motdepasse" >Mot de passe</label>
              <input type="password"   maxlength="20"  name="password" id="password" placeholder="Entrer le mot de passe" required>
                 
            <input type="submit" id='submit' value='CONNEXION'>
        

          </form>

 
</body>

</html>