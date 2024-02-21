<?php

// Afficher le tableau saisi
echo "Les valeurs saisies sont : ";
print_r($tableau);
function rotationDroite($tableau, $positions) {
    // Calculer la taille du tableau
    $taille = count($tableau);
    
    // Gérer le cas où le nombre de positions est supérieur à la taille du tableau
    $positions = $positions % $taille;
    
    // Si le nombre de positions est 0, retourner le tableau sans effectuer de rotation
    if ($positions === 0) {
        return $tableau;
    }
    
    // Faire une rotation à droite en utilisant un tableau temporaire
    $tableauTemp = array_slice($tableau, -$positions);
    $tableauTemp = array_merge($tableauTemp, array_slice($tableau, 0, $taille - $positions));
    
    return $tableauTemp;
}

// Exemple d'utilisation :
$tableau = array(1, 2, 3, 4, 5);
$positions = 2;
$resultat = rotationDroite($tableau, $positions);

echo "Tableau original : ";
print_r($tableau);

echo "Tableau après rotation à droite de $positions positions : ";
print_r($resultat);
?>
