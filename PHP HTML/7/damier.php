<table border=1 width=1000 height=1000>
<?php

for($a=0; $a<5; $a++){

    echo '<tr>';
    for ($i=0;$i<10; $i++){      
        if($i%2 == 0){
        echo '<td>&nbsp</td>';
        }
        else{
        echo '<td bgcolor=black>&nbsp</td>';
        }
    }
    echo '</tr>';
    echo '<tr>';
    for ($n=0;$n<10; $n++){
        if($n%2 == 0){
            echo '<td bgcolor=black>&nbsp</td>';
        }
        else{
            echo '<td>&nbsp</td>';
        }
    }
    echo '</tr>';
}
?>
</table>