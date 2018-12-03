<?php
$depart = array('02' => 'Aisne', '59' => 'Nord', '80' => 'Somme', '60' => 'Oise', '62' => 'Pas-de-calais', '59' => 'Nord');
$newVal = '51';
$newKey = 'Marne';

function table($departs, $newsKey, $newsValue) {
    $departs[$newsKey] = $newsValue;
    foreach ($departs as $key => $value) {
        echo $key . ' ' . $value . '<br>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice7</title>
    </head>
    <body>
        <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
        <p><?= table($depart, $newVal, $newKey) ?></p>
    </body>
</html>
