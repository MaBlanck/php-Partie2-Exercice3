<?php
$age = 10;
$gender = 'Homme'; 
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 3 Partie 2</title>
</head>

<body>
    <h1>Exercice 3 partie 2</h1>
    <p><?php
        if (($age >= 18) && ($gender == 'Homme')) {
            echo 'Vous êtes un homme et vous êtes majeur.';
        } elseif (($age <= 18) && ($gender == 'Homme')) {
            echo 'Vous êtes un homme et vous êtes mineur.';
        } elseif (($age >= 18) && ($gender == 'Femme')) {
            echo 'Vous êtes une femme et vous êtes majeure.';
        } elseif (($age <= 18) && ($gender == 'Femme')) {
            echo 'Vous êtes une femme et vous êtes mineure.';
        };
        ?>
    </p>

</body>

</html>