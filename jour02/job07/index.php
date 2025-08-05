<?php
// Définir la hauteur du triangle
$hauteur = 5;  // Hauteur du triangle

// Début du style CSS
echo '<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .triangle {
        width: 0;
        height: 0;
        border-left: ' . ($hauteur * 10) . 'px solid transparent;
        border-right: ' . ($hauteur * 10) . 'px solid transparent;
        border-bottom: ' . ($hauteur * 20) . 'px solid #3498db; /* Couleur du triangle */
        margin: 20px auto;
    }
</style>';

?>

<!-- Div pour afficher le triangle -->
<div class="triangle"></div>


