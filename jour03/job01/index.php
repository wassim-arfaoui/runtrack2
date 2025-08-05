<?php
// Créer un tableau contenant les nombres
$nombres = array(200, 204, 173, 98, 171, 404, 459);

// Parcourir le tableau et afficher si chaque nombre est pair ou impair
foreach ($nombres as $nombre) {
    // Vérifier si le nombre est pair ou impair
    if ($nombre % 2 == 0) {
        echo $nombre . " est paire<br />";
    } else {
        echo $nombre . " est impaire<br />";
    }
}
?>

