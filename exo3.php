<?php

// On défini les valeurs du tableau
$tableau = array(
    array(
        'nom' => 'nom1',
        'prenom' => 'prenom1',
        'mdp' => 'mdp1' 
    ),
    array(
        'nom' => 'nom2',
        'prenom' => 'prenom2',
        'mdp' => 'mdp2' 
    ),
    array(
        'nom' => 'nom3',
        'prenom' => 'prenom3',
        'mdp' => 'mdp3' 
    )
);

echo '<table border="1"><tr>';

for($i=1;$i<=3;$i++) {
    echo '<tr>';
    for($j=0;$j<=5;$j++) {
        echo '<td>';
        echo $tableau['nom'][$j];
        echo '</td>';
    }
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['prenom'][$j];
        echo '</td>';
    }
    for($j=1;$j<=1;$j++) {
        echo '<td>';
        echo $tableau['mdp'][$j];
        echo '</td>';
    }
    echo '</tr>';
}

echo '</table></tr>';