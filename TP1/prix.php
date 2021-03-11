<?php
function prix()
{
	$prix = readline("prix de l'article : ");
	$quantité = readline("quantité d'article acheté : ");
	$coût = $prix*$quantité;
	echo("\n Vous devez payer $coût €. \n");
}
prix()
include "E:\php\base.php"
?>