<?php
$Q = readline("Quelle quantité de bouteilles achetez-vous ?");
$P = readline("Quel est le prix à l'unité de ces bouteilles ?");
$total = $Q*$P;
echo"$total \n";
if ($total < 200){
	$F = $total*(1/10);
	if ($F > 8){
		echo("$F \n");
		echo($F + $total);
	}
	else{
	echo("8 \n");
	echo($total+8);
	}
}
else{
	echo"$total";
}
?>