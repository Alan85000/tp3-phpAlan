<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
   <?php
    $phrase= "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
    $order= array("\n", "\r\n");
    $replace= "<br>";
    $phrase= str_replace($order, $replace, $phrase);
    echo $phrase,"<br>";

    echo nl2br($phrase);
   ?>
</body>
</html>