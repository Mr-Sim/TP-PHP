<html>
<?php
#VOS COORDONNEES
$nom=$_REQUEST['nom'];
$prenom=$_REQUEST['prenom'];
$mail=$_REQUEST['mail'];
$etablissement=$_REQUEST['eta'];
$ville=$_REQUEST['ville'];
$JJ=$_REQUEST['JJ'];
$MM=$_REQUEST['MM'];
$AAAA=$_REQUEST['AAAA'];
$dep=$_REQUEST['dep'];
#VOTRE TYPE D'EMPLOIS
$emploi=$_REQUEST['emploi'];
$loisir=$_REQUEST['loisir'];
$text=$_REQUEST['projet'];
echo('<h1>Vos informations ont été enregistrées</h1>');
echo($nom."\n");
echo($prenom."\n");
echo($mail."\n");
echo($etablissement."\n");
echo($ville."\n");
echo($JJ."\n");
echo($MM."\n");
echo($AAAA."\n");
echo($dep."\n");
echo($text."\n");
?>
</html>