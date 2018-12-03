<?php
//tableau associatif des departements des hauts de France
$depart = array('02' => 'Aisne', 80 => 'Somme', 60 => 'Oise', 60 => 'Oise', 62 => 'Pas-de-calais', 59 => 'Nord');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
        <?php
        foreach ($depart as $hautDeFrance => $value) { //boucle foreach qui parcour mon tableau associatif
            $array = $hautDeFrance . ' ' . $value;
            ?>
            <p><b><?= $array; //injection php de mon array associatif   ?></b></p> 
        <?php } // accolade qui ferme ma boucle foreach afin que mon affichage de mon tableau soit complet  ?>
    </body>
</html>
