<?php

$tour = 1;
$pair = 0;
$impair = 0;
$chiffre = readline("Entrez un chiffre : ");
if (2%$chiffre == 0){
    $pair = $pair+1;
}
else{
    $impair = $impair+1;
}


while(readline("Voulez-vous recommencer ?") == "oui"){
    $tour = $tour+1;
    $chiffre = readline("Entrez un chiffre : ");
    if ($chiffre%2 == 0){
        $pair = $pair+1;
    }
    else{
        $impair = $impair+1;
    }
}
echo"Vous avez saisi $tour valeurs. \n $pair de ces valeur sont paires, et $impair sont impaires.";


?>