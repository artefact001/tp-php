<?php

  

function compterVoyelles($chaine) {
    // Définir les voyelles
    $voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
    
    // Initialiser le compteur de voyelles
    $nbVoyelles = 0;

// Demander à l'utilisateur de saisir une chaîne de caractères
echo "Veuillez saisir une chaîne de caractères : ";
$chaine = readline();
  

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        // Vérifier si le caractère est une voyelle
        if (in_array($chaine[$i], $voyelles)) {
            $nbVoyelles++;
        }
    }
    
    return $nbVoyelles;
}


// Appeler la fonction pour compter les voyelles
$nbVoyelles = compterVoyelles($chaine);
echo "Nombre de voyelles dans '$chaine' : $nbVoyelles\n";
?>
