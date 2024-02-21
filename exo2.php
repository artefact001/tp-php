<?php 
function supprimerDoublons($tableau) {
    // Utilisation de la fonction array_unique pour supprimer les doublons
    return array_unique($tableau);
}

// Exemple d'utilisation :
$tableau = array(1, 2, 2, 3, 4, 4, 5);
$tableauSansDoublons = supprimerDoublons($tableau);

echo "Tableau original : ";
print_r($tableau);

echo "Tableau sans doublons : ";
print_r($tableauSansDoublons);
?>
