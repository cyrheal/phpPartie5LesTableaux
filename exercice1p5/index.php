
<?php
$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice1</title>
    </head>
    <body>
        <p>Créer un tableau months et l'initialiser avec les valeurs suivantes :

            janvier
            février
            mars
            avril
            mai
            juin
            juillet
            aout
            septembre
            octobre
            novembre
            décembre
        </p>
        <?php
        foreach ($months as $element) {
            ?>
            <div><?= $element; ?></div>
        <?php } ?>
    </body>
</html>

