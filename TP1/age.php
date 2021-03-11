<?php
function age()
{
	$anneeNaissance = readline("Quelle est votre année de naissance ? ");
	$anneeActuelle = readline("En quelle année sommes-nous ? ");
	$age = $anneeActuelle-$anneeNaissance;
	echo("\n Vous avez $age ans. \n ");
}
age()
include "E:\php\base.php"
?>