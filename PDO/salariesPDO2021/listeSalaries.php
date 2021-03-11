<?php
	
	require_once('connexion.php');
	require_once('fonctions.php');

	$nbSalaries= getNbSalaries();
	$lesSalaries = getAllSalaries();
	$lesAdmins = getAllAdmins();
	$moyenneSalaires = getMoyenneSalaires();



?>	
	
	

	<table border=2>  
		<th>id</th>
		<th>nom</th>
		<th>prenom</th>
		<th>date-naissance</th>
		<th>date-embauche</th>
		<th>salaire</th><th>service</th>

		<?php foreach ($lesSalaries as $leSalarie): ?>
		      <tr>
		       <td><?php echo $leSalarie->idsalaries; ?></td><td><?php echo $leSalarie->nom; ?></td>
		       <td><?php echo $leSalarie->prenom; ?></td>    <td><?php echo $leSalarie->date_naissance; ?></td>
		       <td><?php echo $leSalarie->date_embauche; ?></td> 
		       <td><?php echo $leSalarie->salaire; ?></td>   <td><?php echo $leSalarie->service; ?></td>  </tr> 
		<?php endforeach; ?>

	</table>

	<p>nombre de salariés : <?php echo $nbSalaries ; ?></p>

<?php
### Appel de mes fonctions : ###
?>

<p>Les admins : </p>
<table border=1>
	<th>nom</th>
	<th>prenom</th>

	<?php foreach ($lesAdmins as $admin): ?>
		<tr>
			<td><?php echo $admin->nom; ?></td>
			<td><?php echo $admin->prenom; ?></td>
		</tr>
	<?php endforeach; ?>

</table>

<p>Moyenne des salaires : <?php echo $moyenneSalaires ;?></p>
	

	