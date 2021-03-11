<?php
$while = 2;
while($while > 1)
{
    for($ex=0 ; $ex<1 || $ex>10 ; $ex=$ex)
    {
        echo"#####################################################################\n";
        echo"Menu Principal\n";
        $ex = readline("quel exercice ? \n");
        echo"\n";
        if($ex=="exit" || $ex=="e")
        {
            exit("\nAu revoir");
        }
    }
    ##########################################################################
### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ### EXERCICE 1 ###
    if($ex == 1)
    {
       echo"Exercice 1, LES MOIS DE L'ANNEE\n\n";

        $lesMois = array("janvier","février","mars","avril","mai","juin","juillet","aout","septemnre","octobre","novembre","decembre");
        $mot = "informatique";
        for($i=0 ; $i<=1 || $i>=12; $i++)
        {
            $i = readline("Choisissez le numéro d'un mois de l'année : ");
            echo$lesMois[$i-1];
            echo"\n";
        }
    }
    ###########################################################################
### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 ### EXERCICE 2 
    if($ex == 2)
    {
        echo"Exercice 2, LES CHAINES DE CARACTERES\n\n";

        $mot = readline("SAY THE WORD : ");
        $longueurMot = strlen($mot);
        for($i=0; $i<$longueurMot ; $i++)
        {
            echo$mot[$i];
            echo"\n";
        }
    }
    ###########################################################################
### EXERCICE 3 ### EXERCICE 3 ### EXERCICE 3 ### EXERCICE 3 ### EXERCICE 3 ### EXERCICE 3 
    if($ex == 3)
    {
        echo"Exercice 3, DECLARATION DE TABLEAUX\n\n";
        
        for($a=0 ; $a<10; $a++) #Création d'un tableau de 10 chiffres aléatoires entre 1 et 100
        {
            $tab[$a]=rand(0, 100);
        }
        echo"Voici 10 nombres séléctionés au hazard\n";
        for($i=0 ; $i<10 ; $i++)
        {
            echo$tab[$i];
            echo"\n";
        }
        $max=0;
        $min=100;
        $indMax=0;
        $indMin=0;
        $nb=0;
        $somme=0;
        $indPair=0;
        $indImpair=0;
        for($a=0 ; $a<10; $a++) #Création d'un tableau de 10 chiffres aléatoires entre 1 et 100
        {
            $nb = $tab[$a];
            if($nb>$max)
            {
                $max=$nb;
                $indMax=$a+1;
            }
            elseif($nb<$min)
            {
                $min=$nb;
                $indMin=$a+1;
            }
            $somme=$somme+$nb;
            if($nb%2 == 0)
            {
                $tabPair[$indPair]=$nb;
                $indPair++;    
            }
            elseif($nb%2>0)
            {
                $tabImpair[$indImpair]=$nb;
                $indImpair++;
            }
        }
        echo"\nLe nombre le plus grand est $max et se trouve en $indMax e position. \n \n";
        echo"\nLe nombre le plus petit est $min et se trouve en $indMin e position.\n \n";
        echo"\nLa somme de tous les nombres est $somme \n \n";
        echo"Voici les nombres pairs de la liste :\n";
        for($i=0 ; $i<$indPair ; $i++)
        {
            echo$tabPair[$i];
            echo"\n";
        }
        echo"Voici les nombres impairs de la liste :\n";
        for($i=0 ; $i<$indImpair ; $i++)
        {
            echo$tabImpair[$i];
            echo"\n";
        }
    }
    ###########################################################################
### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 
    if($ex == 4)
    {
        echo"Exercice 4\n\n";

        
    }
    ###########################################################################
### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 ### EXERCICE 4 
    if($ex == 5)
    {
        echo"Exercice 5\n\n";

        
    }
    ###########################################################################
### EXERCICE 5 ### EXERCICE 5 ### EXERCICE 5 ### EXERCICE 5 ### EXERCICE 5 ### EXERCICE 5 
    if($ex == 6)
    {
        echo"Exercice 6\n\n";

        
    }
    ###########################################################################
### EXERCICE 7 ### EXERCICE 7 ### EXERCICE 7 ### EXERCICE 7 ### EXERCICE 7 ### EXERCICE 7 
    if($ex == 7)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 8 ### EXERCICE 8 ### EXERCICE 8 ### EXERCICE 8 ### EXERCICE 8 ### EXERCICE 8 
    if($ex == 8)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 9 ### EXERCICE 9 ### EXERCICE 9 ### EXERCICE 9 ### EXERCICE 9 ### EXERCICE 9 
    if($ex == 9)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 10 ### EXERCICE 10 ### EXERCICE 10 ### EXERCICE 10 ### EXERCICE 10 ### EXERCICE 10 
    if($ex == 10)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 11 ### EXERCICE 11 ### EXERCICE 11 ### EXERCICE 11 ### EXERCICE 11 ### EXERCICE 11 
    if($ex == 11)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 12 ### EXERCICE 12 ### EXERCICE 12 ### EXERCICE 12 ### EXERCICE 12 ### EXERCICE 12 
    if($ex == 12)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 13 ### EXERCICE 13 ### EXERCICE 13 ### EXERCICE 13 ### EXERCICE 13 ### EXERCICE 13 
    if($ex == 13)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 14 ### EXERCICE 14 ### EXERCICE 14 ### EXERCICE 14 ### EXERCICE 14 ### EXERCICE 14 
    if($ex == 14)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 15  ### EXERCICE 15 ### EXERCICE 15 ### EXERCICE 15 ### EXERCICE 15 ### EXERCICE 15  
    if($ex == 15)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 16 ### EXERCICE 16 ### EXERCICE 16 ### EXERCICE 16 ### EXERCICE 16 ### EXERCICE 16 
    if($ex == 16)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 17 ### EXERCICE 17 ### EXERCICE 17 ### EXERCICE 17 ### EXERCICE 17 ### EXERCICE 17 
    if($ex == 17)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 18 ### EXERCICE 18 ### EXERCICE 18 ### EXERCICE 18 ### EXERCICE 18 ### EXERCICE 18 
    if($ex == 18)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 19 ### EXERCICE 19 ### EXERCICE 19 ### EXERCICE 19 ### EXERCICE 19 ### EXERCICE 19  
    if($ex == 19)
    {
        echo"Exercice 2\n\n";

        
    }
    ###########################################################################
### EXERCICE 20 ### EXERCICE 20 ### EXERCICE 20 ### EXERCICE 20 ### EXERCICE 20 ### EXERCICE 20
    if($ex == 20)
    {
        echo"Exercice 2\n\n";

        
    }

}
?>