<?php
$tour = 0;
$val = 0;
$limite = readline("Combien de tours voulez-vous executer ? ");
while($tour < $limite){
    $val = $val+1;
    $tour = $tour +1;
    echo $val, "\n";
}
while(readline("voulez-vous recommencer ? ") == "oui"){
$tour = 0;
$val = 0;
$limite = readline("Combien de tours voulez-vous executer ? ");
while($tour < $limite){
    $val = $val+1;
    $tour = $tour +1;
    echo $val, "\n";
}
}
?>