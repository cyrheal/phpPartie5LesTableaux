<?php
$depart = array('02' => 'Aisne', 80 => 'Somme', 60 => 'Oise', 60 => 'Oise', 62 => 'Pas-de-calais', 59 => 'Nord');

function table($departs) {
    foreach ($departs as $index => $valeur) {
        echo '<p>' . $valeur . '</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice9</title>
    </head>
    <body>
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
        <p><?= table($depart) ?></p>
    </body>
</html>
