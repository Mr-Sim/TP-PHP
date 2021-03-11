<?php
$dep = readline("Quel est le numéro de votre département ? ");
if ($dep == 75 || $dep == 77 || $dep == 78 || $dep == 91 || $dep == 92 || $dep == 93){
	echo"Vous êtes en île de France";
}
elseif ($dep < 1 || $dep > 99){
	echo"le numéro de votre département doit être entre 1 et 100";
}
else{
	echo"Vous n'êtes pas en île de France";
}
?>