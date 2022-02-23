<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
<?php
$tableau[0][]="Alan";
$tableau[0][]="Mathé";
$tableau[1][]="Toto";
$tableau[1][]="Lamoto";
$tableau[2][]="Azertyuiop";
$tableau[2][]="Wxcvbn";
$tableau[3][]="Chien";
$tableau[3][]="OuafOuaf";
$tableau[4][]="Chat";
$tableau[4][]="MiaouMiaou";
$tableau[5][]="Vache";
$tableau[5][]="MeuhMeuh";
$tableau[6][]="Ane";
$tableau[6][]="HihanHihan";
$tableau[7][]="Coq";
$tableau[7][]="CocoricoCocorico";
$tableau[8][]="Souris";
$tableau[8][]="SquickSquick";
$tableau[9][]="Mouton";
$tableau[9][]="BeeeehBeeeeh";
$tableau[10][]="Oiseau";
$tableau[10][]="CuuiCuui";
for($i=0;$i<count($tableau);$i++)
{
echo vsprintf ("<tt>%'/-20s %'/-20s </tt><br />",$tableau[$i]);
}
?>
</body>
</html>