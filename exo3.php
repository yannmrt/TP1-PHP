<?php

// On défini les valeurs du tableau
$tableau = array(
    'nom' => 'nom1, nom2, nom3',
    'prenom' => 'prenom1, prenom2, prenom3',
    'mdp' => 'mdp1, mdp2, mdp3'
);

echo '<table border="1"><tr>';

for($i=1;$i<=3;$i++) {
    echo '<tr>';
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['nom'];
        echo '</td>';
    }
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['prenom'];
        echo '</td>';
    }
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['mdp'];
        echo '</td>';
    }
    echo '</tr>';
}

echo '</table></tr>';