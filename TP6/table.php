<?PHP

$table = readline("Jusqu'à quel nombre souhaitez vous aller ? ");
for($facteur=1; $facteur<=10; $facteur++)
{
    for($valeur=1; $valeur<=$table; $valeur++)
    {
        echo$valeur*$facteur."\t";
    }
    echo"\n";
}

?>