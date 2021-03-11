<?php
$note = readline("Quelle note avez-vous eu à l'examen ? ");
if ($note < 0){
	echo"Note non valide";
}
elseif ($note < 10){
	echo"Refusé";
}
elseif ($note < 12){
	echo"admis";
}
elseif ($note < 14){
	echo"passable";
}
elseif ($note < 16){
	echo"bien";
}
elseif ($note < 18){
	echo"très bien";
}
elseif ($note < 20){
	echo"félicitations !";
}
else{
	echo"note invalide";
}
?>