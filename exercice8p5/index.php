<?php
$calendar = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');

function calendars($calendars) { //function qui affiche mon tableau.
    for ($month = 0; $month < 12; $month ++) {// boucle qui parcours mon tableau.
        echo '<div>' . $calendars[$month] . "\n" . '<div>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice8</title>
    </head>
    <body>
        <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
        </p>
        <div><?= calendars($calendar)// injection de ma function pour l'affichage de mon tableau.   ?></div>  
    </body>
</html>