<?php
#Renvoie le nombre de salariés enregistrés dans la base de donnée
function getNbSalaries($conn) {
    $request = "SELECT count(*) FROM salaries ;";
    $result = mysqli_query($conn, $request) or die(mysqli_error($conn));
    $ligne = mysqli_fetch_array($result);
    return $ligne[0];
}
#Renvoie un tableau de tous les salariés
function getAllSalaries($conn) {
    $listeSalaries = array();
    $request = "SELECT * FROM salaries";

    $result = mysqli_query($conn, $request) or die(mysqli_error($conn));
    while ($ligne = mysqli_fetch_assoc($result)){
        $listSalaries[]=$ligne;
    }
    return $listeSalaries;
}
?>