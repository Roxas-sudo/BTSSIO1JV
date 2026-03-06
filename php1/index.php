<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>PHP cours 1</title>
</head>
<body>
    <!-- Comentaires en HTML Titre de la page-->
     <h1> Mes premiers pas en PHP</h1>
     <?php

     // commentaires en php sur une ligne
     /*plusieurs ligne
    de commentaire
    */
    echo "Bonjour";
    echo "<h2>Bonjour</h2>";
    echo htmlspecialchars("<script>Bonjour</script>");
    //déclaration des variables
    $note1 = 15;
    $note2 = 5;
    $somme;
    //calcul
    $somme = $note1 + $note2;
    //resultat
    //affichage d'une variable :
    //on peut mettre en commentaire le code : echo $note;

    //dans une affichage on peut cpncatenere texte et variable
    echo
      ?>
    
    </body>
</html>