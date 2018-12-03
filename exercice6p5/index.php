<?php
$depart = array(59 => 'Nord', 80 => 'Somme', 60 => 'Oise', 62 => 'Pas-de-calais', 59 => 'Nord');
$departVal = 59; //clef = index tableau associatif

function table($departs, $choices) {
    //function qui renvoi l'affichage de mon departement et sa valeur
    echo 'Valeur = ' . $departs[$choices];
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice6</title>
    </head>
    <body>
        <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
        <p><?= table($depart, $departVal)// injection du resultat de la function    ?></p>
    </body>
</html>

