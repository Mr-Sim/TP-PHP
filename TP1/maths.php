<?php
function maths()
{
	$chiffre1 = readline("Quel age as-tu ?");
	$chiffre2 = readline("ton nombre préféré");
	$addition = $chiffre1+$chiffre2;
	$soustraction = $chiffre1-$chiffre2;
	$multiple = $chiffre1*$chiffre2;
	$division = $chiffre1/$chiffre2;
	$pourcentage = $chiffre1%$chiffre2;
	echo("\n ça n'a aucune importance, mais sache que certaines opérations avec ces chiffres donnent :");
	echo("$addition lorsqu'on les additionne \n $soustraction lorsqu'on les soustrait \n $multiple lorsqu'on les multiplie \n $division lorsqu'on les divise  \n $pourcentage lorsqu'on en fait un pourcentage. \n");
}
maths()
include "E:\php\base.php"
?>