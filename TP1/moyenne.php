<?php
function moyenne()
{
	$note1 = readline("Quelle-est votre PREMIERE note ? ");
	$note2 = readline("Quelle-est votre DEUXIEME note ? ");
	$note3 = readline("Quelle-est votre TROISIEME note ? ");
	$moyenne = ($note1+$note2+$note3)/3;
	$arrondi_inférieur = floor($moyenne);
	$arrondi_supérieur = ceil($moyenne);
	$arrondi_deux = round(($note1+$note2+$note3)/3 , 2, PHP_ROUND_HALF_UP);
	echo("Votre moyenne à l'arrondi inférieur est $arrondi_inférieur ; votre moyenne à l'arrondi supérieur est $arrondi_supérieur ; votre moyenne est $arrondi_deux \n");
}
moyenne()
include "E:\php\base.php"
?>