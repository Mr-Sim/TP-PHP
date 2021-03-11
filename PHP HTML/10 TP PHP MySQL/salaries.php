<html>

<?php
//Etablissement de la connection avec salaries
require_once("connect.php");

//Formulation de la requete
$requete = ("SELECT * FROM salaries");
$result = mysqli_query($conn,$requete);
mysqli_query($conn, $requete);
//Validation requete
if(!($result=mysqli_query($conn,$requete))){
    die('Erreur de la requete oops:'.$requete);
}
//Extraction données sous forme de tableau
if (mysqli_num_rows($result)>0){
    //On exploite chaque lignes de résultat
    echo"<table border=3 width=400 height=200>";
    echo("<tr><th>idsalaries</th><th>nom</th><th>prenom</th><th>date_naissance</th><th>date_embauche</th><th>salaire</th><th>service</th></tr>");
    while( $row = mysqli_fetch_array($result)){
        echo("<tr><th>".$row["idsalaries"]."</th><th>".$row["nom"]."</th><th>".$row["prenom"]."</th><th>".$row["date_naissance"]."</th><th>".$row["date_embauche"]."</th><th>".$row["salaire"]."</th><th>".$row["service"]."</th></tr>");
    }
    echo"</table>";
}
else{
    echo"0 résultat";
}
######################################################################
######################################################################
######################################################################
//Traitement des donnees :
$requeteNbSalaries = "SELECT COUNT(nom) FROM salaries";
$requeteSalaireMoyen = "SELECT * FROM salaire";
$requeteSalaireMin = "";
$requeteSalaireMax = "";
$requeteNbCommercial = "SELECT COUNT(commercial) FROM service";
$requeteNbComptable = "SELECT COUNT(comptable) FROM service";
$requeteNbInformatique = "SELECT COUNT(informatique) FROM service"; 
######################################################################
######################################################################
######################################################################
//Formulation de la requete

$result = mysqli_query($conn,$requeteNbSalaries);
mysqli_query($conn, $requeteNbSalaries);
//Validation requete
if(!($result=mysqli_query($conn,$requeteNbSalaries))){
    die('Erreur de la requete nombre salariés:'.$requeteNbSalaries);
}
//Extraction données sous forme de tableau
if (mysqli_num_rows($result)>0){
    //On exploite chaque lignes de résultat
    while( $row = mysqli_fetch_row($result)){
        echo("Nombre de salariés : ".int($row));
    }
}
else{
    echo"0 résultat";
}


mysqli_close($conn);
?>


</html>