<?php
function concatenerChaines($tableau) {
    // Utiliser la fonction implode pour concaténer les éléments du tableau en une chaîne
    return implode('', $tableau);
}

// Exemple d'utilisation :
$tableau = array("Bonjour", "à", "tous");
$nouvelleChaine = concatenerChaines($tableau);

echo "La nouvelle chaîne est : $nouvelleChaine";
?>
