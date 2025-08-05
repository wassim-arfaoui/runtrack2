<?php
// Créer une variable de type string avec le texte donné
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne et afficher un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];  // Afficher un caractère sur deux
}
?>
