<?php
function help()
{
    echo "\n";
    echo "tarifs, \n";
    echo "\n";
}


function tarifs()
{
    $age = readline("Quel est votre âge ? ");
    if ($age < 26 || $age > 65)
    {
        echo"tarifs réduits";
    }
    
    else
    {
        echo"plein tarif";
    }
}

while(1)
{
$invite = readline("Quel programme souhaitez vous exécuter ? (tapez help pour voir la liste des programmes) ");
echo "\n";
$invite();
}


 ?>
