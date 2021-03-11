<?php
 $poids = readline("Quel-est le poids de votre Karva ? ");
 $age = readline("Quel âge a votre Karva ? ");
 $corne = readline("De combien de cm mesure les cornes de votre Karva ? ");
 $taille = readline("Quelle est la taille de votre Karva ? ");
 $note = ($corne*$taille)+$poids ;
 echo "\n Votre Karva obtient la note de $note points !";
?>
