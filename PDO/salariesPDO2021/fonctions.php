 <?php  

  function getNbSalaries(){
    global $pdo;  
    $query = "SELECT count(*) as nb FROM salaries ;";

    try {    
      $result = $pdo->query($query)->fetch(); 
      return $result->nb ;  
    }  catch ( Exception $e ) {    
      die ("erreur dans la requete ".$e->getMessage());  } 

 }

 function getAllSalaries(){  
   global $pdo;    
   $query = 'SELECT * FROM salaries ;'; 

   try {       
    $result = $pdo->query($query)->fetchAll();
    return $result; 
    } 

       catch ( Exception $e ) {
             die ("erreur dans la requete ".$e->getMessage());
           }
 }

 ### AJOUT DE MES PROPRES FONCTIONS ###

 //Renvoie les noms de tous les administrateurs
 function getAllAdmins(){
   global $pdo;
   $query = 'SELECT nom, prenom FROM salaries WHERE role="admin";';

   try{
     $result = $pdo->query($query)->fetchAll();
     return $result;
   }
   catch (EXCEPTION $e) {
     die("erreur dans la requete ".$e->getMessage());
   }
 }

 //Renvoie la moyenne des salaires de tous les employés
 function getMoyenneSalaires(){
   global $pdo;
   $query = 'SELECT (SUM(salaire) / COUNT(salaire)) as nb FROM salaries;';

   try{
     $result = $pdo->query($query)->fetch();
     return $result->nb ;
   }
   catch (EXCEPTION $e){
     die("erreur dans la requete ".$e->getMessage());
   }
 }

 //Envoie une requête de suppression d'une ligne du tableau
?>