<?php

function funct($depart = array('02' => 'Aisne', 80 => 'Somme', 60 => 'Oise', 62 => 'Pas-de-calais', 59 => 'Nord')) {
    foreach ($depart as $index => $valeur) {
        echo '<p>Le departement ' . $valeur . ' a le numéro ' . $index . '</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice10</title>
    </head>
    <body>
        <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
            Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "à le numéro" + numéro du département</p>
        <p><?= funct() ?></p>
    </body>
</html>

