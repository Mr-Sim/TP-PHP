<?php

    $age = readline("Quel est votre âge ? ");
    if ($age < 26 || $age > 65)
    {
        echo"tarifs réduits";
    }
    
    else
    {
        echo"plein tarif";
    }

?>