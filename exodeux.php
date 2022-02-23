<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
    $phrase= "Mais le chat ne se doute pas une seule seconde que la souris avait plein d'amis qui vont venir la venger.";
    for ($i=0;$i<strlen($phrase);$i++) 
    {
        echo "<h1> $phrase[$i] </h1>";
    }
    ?>
</body>
</html>