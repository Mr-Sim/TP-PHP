<?php
function heure()
{
	date_default_timezone_set('Europe/Paris');
	echo "nous sommes le ";
	echo date('D-d-F-Y');
	echo"\n";
	echo "il est";
	echo date('h') ;
	echo"heure, ";
	echo date('i') ;
	echo"minutes et ";
	echo date("s") ;
	echo"secondes.";
	echo"\n";
}
heure()
include "E:\php\base.php"
?>