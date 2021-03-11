<?php
$while = 2;
while($while > 1)
{
    for($ex=0 ; $ex<1 || $ex>10 ; $ex=$ex)
    {
        $ex = readline("\nquel exercice ? ");
        echo"\n";
        if($ex=="exit" || $ex=="e")
        {
            exit("Au revoir");
        }
    }
    ##########################################################################
### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ###
    if($ex == 1)
    {
        for($heure=-1 ; $heure<0 || $heure>12 ; $heure=$heure)
        {
            $heure = readline("\nheure d'arrivée : ");
        }
        $prix = 10+5*$heure ;
        if($prix>53)
        {
            echo"\nLe prix est". 53 ."€.\n" ;
        }
        else
        {
            echo"\nLe prix est $prix €.\n" ;
        }
    }
    ###########################################################################
### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 
    if($ex == 7)
    {
          #253077507300483 
        $num = readline("numéro de sécurité sociale : ");
        if(strlen($num)==15)
        {
            if(substr($num, 0, 1)==1)
            {
                echo"\nHomme";
                $validite = "Valide";
            }
            elseif(substr($num, 0, 1)==2)
            {
                echo"\nFemme";
                $validite = "Valide";
            }
            else
            {
                $validite = "Non valide";
            }

        }
        else
        {
            $validite = "Non valide";
        }
        if($validite == "Valide")
        {
            if(substr($num, 5, 2)==75 || substr($num, 5, 2)==78 || substr($num, 5, 2)==77|| substr($num, 5, 2)==91|| substr($num, 5, 2)==92|| substr($num, 5, 2)==93|| substr($num, 5, 2)==94)
            {
                $validite = "Île De France\nValide";
            }
            else
            {
                $validite = "Hors Île De France\nValide";
            }
        }
        echo"\n$validite\n";
    }






}
?>