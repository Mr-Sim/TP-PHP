<?php


echo"Bienvenue ! Ici vous pouvez calculer des volumes ! 
\nVoici les différentes formes dont vous pouvez calculer le volume : 
\n \n shpere 
\n cube 
\n pave 
\n cylindre \n \n";
$invite = readline("Entrez le nom de la forme souhaité sans accents. (Entrez 'exit' pour sortir) ");
if ($invite == "exit"){
	exit("Au revoir !");
}
elseif ($invite == "sphere"){
	$rayon = readline("Quel est le rayon de la sphère ? ");
	sphere();
}
elseif ($invite == "cube"){
	$coté = readline("quelle est la longueure des arrêtes de votre cube ? ");
	cube();
}
elseif ($invite == "parallelepipede"){
	$coté = readline ("quelle est la longueur du coté de votre pavé ? ");
	$hauteur = readline ("quelle est la hauteur de votre pavé ? ");
	$largeur = readline ("quelle est la largeur de votre pavé ? ");
	pave();
}
elseif ($invite == "cylindre"){
	$rayon = readline ("Quel est le rayon de votre cylindre ? ");
	$hauteur = readline ("Quelle est la hauteur de votre cylindre ? ");
	cylindre();
}
else{
	erreur();
}
function sphere(){
	$volume = (4*pi()*($rayon * $rayon * $rayon)/3);
}
function cube(){
	$volume = ($coté*$coté*$coté);
}
function pave(){
	$volume = ($coté*$hauteur*$largeur);
}
function cylindre(){
	$volume = (pi()*($rayon*$rayon)*$hauteur);
}
function erreur(){
	echo"Faites un effort ! Ecrivez mieux ! \nAu revoir !";
	exit();
}
round($volume, 0, PHP_ROUND_HALF_UP);
echo("Le volume de votre forme est égal à $volume");

?>