<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php
    $phrase = htmlspecialchars(str_replace(array("'", "\""), "", 
        htmlspecialchars('<form action="script.php">')));
    echo $phrase;
    ?>
</body>
</html>