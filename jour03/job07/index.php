<?php
// Créer une variable de type string avec le texte donné
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Initialiser une variable vide pour la nouvelle chaîne
$newStr = "";

// Calculer la longueur de la chaîne
$len = strlen($str);

// Parcourir la chaîne et effectuer le remplacement
for ($i = 0; $i < $len; $i++) {
    // Trouver le caractère suivant (le dernier caractère devient le premier)
    $nextChar = $str[($i + 1) % $len];
    $newStr .= $nextChar;  // Ajouter le caractère suivant à la nouvelle chaîne
}

// Afficher la chaîne modifiée
echo $newStr;
?>
