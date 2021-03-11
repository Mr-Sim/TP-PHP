<?php

$nombre = random_int(1, 10);
$vie = 5;

while($vie > 0){
    $tour = readline("Devine le nombre : \n");
    if($tour == $nombre){
        echo"Bravo vous avez réussi ! \n";
        exit();
    }
    elseif($tour > $nombre){
        echo"c'est moins\n";
        $vie = $vie-1;
    }
    else{
        echo"c'est plus\n";
        $vie = $vie-1;
    }
}
?>
