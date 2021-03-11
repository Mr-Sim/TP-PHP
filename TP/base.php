<?php
function help() // cette fonction affiche les autres fonctions executables dans ce programme
{
    echo "\n";
    echo "champ, \n";
    echo "\n";
}
//((((((((((((((((((((((((((((((((()))))))))))))))))))))))))))))))))
//Cette partie contient les différents programmes sous forme de fonctions

function champ()
{
    
}

//#################################################################
//Voici le menu principal demandant d'entrer le nom de fonction correspondant au programme souhaité.
while(1)
{
$invite = readline("Quel programme souhaitez vous exécuter ? (tapez help pour voir la liste des programmes) ");
echo "\n";
$invite();
}


 ?>
