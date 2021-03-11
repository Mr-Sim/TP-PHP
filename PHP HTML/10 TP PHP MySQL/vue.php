<?php
require_once("connexion.php");
require_once("fonctions.php");


$nbSalaries = getNbSalaries($conn);
$listeSalaries = getAllSalaries($conn);
?>
<table border=2>
    <th>id</th>
    <th>nom</th>
    <th>prenom</th>
    <th>date_naissance</th>
    <th>date_embauche</th>
    <th>salaire</th>
    <th>service</th>

    <?php foreach ($listeSalaries as $indice => $ligne): ?>
        <tr>
            <th><?php echo $ligne['idsalaries']; ?></th>
            <th><?php echo $ligne['nom']; ?></th>
            <th><?php echo $ligne['prenom']; ?></th>
            <th><?php echo $ligne['date_naissance']; ?></th>
            <th><?php echo $ligne['date_embauche']; ?></th>
            <th><?php echo $ligne['salaire']; ?></th>
            <th><?php echo $ligne['service']; ?></th>
        </tr>
    <?php endforeach; ?>
</table>
<?php foreach ($listeSalaries as $indice => $ligne){
    echo $ligne['idsalaries'];
    echo"bonjour";
}
?>
    <p>Nombre de salariés : <?php echo $nbSalaries; ?> </p>