<?php
function help(){
	echo("Liste des programmes executables : \n");
	echo("Menu : sortie ; help \n");
	echo("TP1  : bonjour ; prix ; age ; maths ; commande ; moyenne ; heure ; champ ; concours ; incantation \n");
}

function sortie(){
	exit;
}

// Main menu Main menu Main menu Main menu Main menu Main menu Main menu Main menu Main menu Main menu

while(1){
$invite = readline("Quel programme souhaitez vous exécuter ? (tapez help pour voir la liste des programmes) ");
$invite();
}
?>
