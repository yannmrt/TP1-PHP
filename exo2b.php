<?php 


$tableau = array('1', '2', '3', '4', '5');

echo '<table border="1"><tr>';

// Exo 2 partie b
for($i=0;$i<=4;$i++) {
    echo '<td>' . $tableau[$i] . '</td>';

}

echo '</table></tr>';


// code source de la page 
highlight_file(__FILE__);