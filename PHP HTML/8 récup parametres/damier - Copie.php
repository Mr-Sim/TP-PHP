<table border=1 width=400 height=800>
<?php
$ligne=$_REQUEST['ligne'];
$colonne=$_REQUEST['colonne'];
$couleur=$_REQUEST['couleur'];
  for ($i=0;$i<$ligne; $i++){
     echo '<tr>';
     for ($j=0;$j<$colonne; $j++){
      if(($j+$i)%2==0)
echo '<td>&nbsp</td>';
     else
echo '<td bgcolor='.$couleur.' &nbsp</td>';
    }
    echo '</tr>';
  }
  
?>
</table>
