<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
   <?php
   
   $mots_interdits= array( 'Zut', 'zut' );

   $phrase1= "Zut alors ! Un zut chat qui zut se zut fait attaquer zut par des zut souris c'est zut quand même zut un comble !"; 
   $phrase2= "Mince alors zut ! Un zut gros matou zut qui zut est zut harcelé zut par des rongeurs zut c'est tout zut de même zut pas croyable !";
   $phrase3= "Zut de zut de zut ! Mais comment zut notre chat va zut faire pour se zut tirer daffaire ?";
   $phrase4= "Sapristi zut ! Comment zut donc notre zut félin peut zut faire pour zut sauver sa peau zut ?";

   $newPhrase1 = str_ireplace($mots_interdits,'***',$phrase1); 
   $newPhrase1 = str_ireplace('-','',$newPhrase1);
   $newPhrase1 = trim($newPhrase1); 
   echo $newPhrase1,"<br/>";

   $newPhrase2 = str_ireplace($mots_interdits,'***',$phrase2); 
   $newPhrase2 = str_ireplace('-','',$newPhrase2);
   $newPhrase2 = trim($newPhrase2); 
   echo $newPhrase2,"<br/>";

   $newPhrase3 = str_ireplace($mots_interdits,'***',$phrase3); 
   $newPhrase3 = str_ireplace('-','',$newPhrase3);
   $newPhrase3 = trim($newPhrase3); 
   echo $newPhrase3,"<br/>";

   $newPhrase4 = str_ireplace($mots_interdits,'***',$phrase4); 
   $newPhrase4 = str_ireplace('-','',$newPhrase4);
   $newPhrase4 = trim($newPhrase4); 
   echo $newPhrase4;

   ?>
</body>
</html>