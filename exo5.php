<?php
function trouverElementsCommuns($tableau1, $tableau2) {
    // Utiliser la fonction array_intersect pour trouver les éléments communs
    return array_intersect($tableau1, $tableau2);
}

// Exemple d'utilisation :
$tableau1 = array(1, 2, 3, 4, 5);
$tableau2 = array(3, 4, 5, 6, 7);
$elementsCommuns = trouverElementsCommuns($tableau1, $tableau2);

echo "Les éléments communs sont : ";
print_r($elementsCommuns);
?>
