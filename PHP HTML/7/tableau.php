<html>
 <head>
 </head>
 <body>
 <table border=1>
 <?php
 echo'<tr>';
 $pays=array('France','Italie','Espagne','Allemagne');
 foreach($pays as $nom){
echo '<th>'.$nom.'</th>';
}
 echo '</tr>';
 echo'<tr>';
 $nb=array(9.7,4.8,9.3,4.9);
 foreach($nb as $nom){
echo '<th>'.$nom.'</th>';
}
 echo '</tr>';
 ?>
 </body>
</html>


