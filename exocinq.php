<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php

    $phrase1= "Et c'est ainsi que des centaines de souris se lancèrent à l'assault de notre pauvre chat";
    $phrase2= "Surpris par cette attaque d'ampleur massive, il n'eut pas d'autre choix que de quitter rapidement les lieux";
    if( strcmp( strtolower( $phrase1), strtolower( $phrase2 )) < 0 )
    {
    echo "La phrase 1 vient avant la phrase 2-----";
    }
    else
    {
    echo "La phrase 2 vient avant la phrase 1-----";    
    }

    $tableau = array($phrase1, $phrase2);
    sort($tableau);
    print_r($tableau);
    ?>
</body>
</html>