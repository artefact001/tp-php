<?php

// Afficher le tableau saisi
echo "Les valeurs saisies sont : ";
print_r($tableau);
function produitTableau($tableau) {
    $produit = 1;
    foreach ($tableau as $element) {
        $produit *= $element;
    }
    return $produit;
}

// Exemple d'utilisation :
$tableau = array(2, 3, 4, 5);
$resultat = produitTableau($tableau);
echo "Le produit des éléments du tableau est : " . $resultat;
?>
