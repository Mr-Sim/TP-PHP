<?php
$nombre = readline("Ecrivez un nombre : ");
if (2%$nombre == 0){
    $etat = "pair";
}
else{
    $etat = "impair";
}
echo("\n Votre nombre est $etat.\n Les 10 prochains nombres $etat sont : ");
$nombremax = $nombre + 20;
while($nombre < $nombremax ){
$nombre = $nombre+2;
echo"$nombre ; ";
}
?>