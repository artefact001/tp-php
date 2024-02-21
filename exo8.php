<?php
function calculerMedian($tableau) {
    // Trier le tableau par ordre croissant
    sort($tableau);
    
    // Obtenir le nombre d'éléments dans le tableau
    $count = count($tableau);
    
    // Calculer l'index médian
    $mid = floor($count / 2);
    
    // Si le nombre d'éléments est impair, retourner l'élément médian
    if ($count % 2 != 0) {
        return $tableau[$mid];
    } else {
        // Si le nombre d'éléments est pair, retourner la moyenne des deux éléments médians
        return ($tableau[$mid - 1] + $tableau[$mid]) / 2;
    }
}

// Exemple d'utilisation :
$tableau = array(4, 2, 5, 1, 3);
$median = calculerMedian($tableau);
echo "La médiane du tableau est : $median";
?>
