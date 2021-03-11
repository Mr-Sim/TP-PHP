<?PHP
$type = readline("1. Rectangle \n2. Triangle rectangle \n3. Triangle isocelle \n Quelle forme voulez vous ? ");
$valeur = readline("De combien ? ");

if($type == 1)
{
    for($i=0 ; $i<$valeur; $i++)
    {
        for($n=0 ; $n<$valeur; $n++)
        {
            echo"♦ ";
        }
        echo"\n";
    }
}

elseif($type == 2)
{
    for($i=0; $i<=$valeur; $i++)
    {
        for($n=0 ; $n<=$i; $n++) 
        {
            echo"♦ ";
        }
        echo"\n";
    }
}

else
{
    for($i=0; $i<$valeur; $i++)
    {
        for($n=($valeur-$i); $n>=0; $n--)
        {
            echo"  ";   
        }

        for($t=0; $t<=$i; $t=$t+0.5)
        {
            echo"♦ ";
        }
        echo"\n";
    }
}
?>