<?php
// Créer une variable de type string avec le texte donné
$str = "Les choses que l'on possède finissent par nous posséder.";

// Initialiser une variable vide pour stocker la chaîne inversée
$inverse = "";

// Parcourir la chaîne de droite à gauche
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $inverse .= $str[$i];  // Ajouter chaque caractère à l'inverse
}

// Afficher la chaîne inversée
echo $inverse;
?>
