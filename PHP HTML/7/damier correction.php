<table border=1 width=600>
<?php
$ligne=10;
$colonne=10;
  for ($i=0;$i<$ligne; $i++){
     echo '<tr>';
     for ($j=0;$j<$colonne; $j++){
      if(($j+$i)%2==0)
echo '<td>&nbsp</td>';
     else
echo '<td bgcolor=black>&nbsp</td>';
    }
    echo '</tr>';
  }
  
?>
</table>
