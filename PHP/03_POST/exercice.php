<?php
// Exercice :

/* 
    - Créer un formulaire avec les champs ville et code postal, et une zone de texte adresse.
    - Vous envoyez les données saisies par l'internaute dans exercice-traitement.php
      Vous y affichez ces saisies en précisant l'étiquette correspondante.

*/



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>formulaire</title>
    <form method="post" action="exercice-traitement.php"> 

     <div>
            <label for="ville">Ville</label>
            <input type="text" name="ville" id="ville" value=""> 
    </div>
    <div>
            <label for="code_postal">Code postal</label>
            <input type="text" name="code_postal" id="code_postal" value=""> 
    </div>
    <div>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" id="adresse" value=""> 
    </div>
    <div>
            <input type="submit" name="validation" value="envoyer"> 
    </div>
    </form>
</head>
<body>
    
</body>
</html>