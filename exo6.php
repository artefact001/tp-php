<?php
function elementsSansDoublons($tableau) {
    // Compter l'occurrence de chaque élément dans le tableau
    $occurrences = array_count_values($tableau);
    
    // Filtrer les éléments qui ont une occurrence de 1 (pas de doublons)
    $elementsSansDoublons = array_filter($tableau, function($element) use ($occurrences) {
        return $occurrences[$element] === 1;
    });
    
    return $elementsSansDoublons;
}

// Exemple d'utilisation :
$tableau = array(1, 2, 2, 3, 4, 4, 5);
$elementsUniques = elementsSansDoublons($tableau);

echo "Les éléments sans doublons sont : ";
print_r($elementsUniques);
?>
