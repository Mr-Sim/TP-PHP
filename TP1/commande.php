<?php
function commande()
{
	$prixUnité = readline("quel est le prix de votre article à l'unité ? ");
	$quantité = readline("combien d'articles avez vous acheté avec votre argent de riche bourgeois ? ");
	$prixCommande = $prixUnité*$quantité;
	$fraisDePort = 0.02*$prixCommande;
	$prixTotal = $fraisDePort+$prixCommande;
	echo("\n vous achetez $prixCommande € de roblochon avec $fraisDePort € de frais de Port ce qui vous fait un total de $prixTotal €. Félicitation, vous êtes ruiné ! bon appétit ! \n ");
}
commande()
include "E:\php\base.php"
?>