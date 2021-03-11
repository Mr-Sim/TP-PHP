<?php
$age = readline("quelle est votre ancienneté au sein de l'entreprise ? ");

if ($age <5){
	$prime = 50;
}
else {
	$salaire = readline("quel est votre salaire ? ");
	$statut = readline("Quel est votre statut ? ");
	if ($statut != "cadre"){
		$prime = 0.08*$salaire;
	}
	else{
		$prime = 0.1*$salaire;
	}
}
echo($prime);
?>