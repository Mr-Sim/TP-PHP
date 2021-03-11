<?php
$quantite = readline("quelle quantité souhaitez-vous acheter ?");
if ($quantite > 49){
	echo(110 * $quantite);
}
elseif ($quantite > 10){
	echo(135 * $quantite);
}
else {
	echo(150* $quantite);
}
?>