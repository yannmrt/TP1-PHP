<?php 

// On défini le tableau dans la variable tableau
$tableau = array('1', '2', '3', '4', '5');

// On fait la boucle pour afficher les données
for($i=0;$i<=4;$i++) {
    echo '<td>' . $tableau[$i] . '</td>';
}

// code source de la page 
highlight_file(__FILE__);