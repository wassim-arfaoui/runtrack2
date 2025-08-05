<?php
// Définir les dimensions du rectangle
$largeur = 20;  // Largeur du rectangle
$hauteur = 10;  // Hauteur du rectangle

// Afficher le rectangle
for ($i = 0; $i < $hauteur; $i++) {  // Pour chaque ligne
    for ($j = 0; $j < $largeur; $j++) {  // Pour chaque colonne
        echo "*";  // Afficher un astérisque pour chaque "case" du rectangle
    }
    echo "<br />";  // Retour à la ligne après chaque ligne du rectangle
}
?>
