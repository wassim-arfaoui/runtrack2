<?php
// Fonction qui vérifie si un nombre est premier
function estPremier($n) {
    if ($n <= 1) {
        return false; // Les nombres <= 1 ne sont pas premiers
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false; // Le nombre n'est pas premier si divisible par un autre que 1 et lui-même
        }
    }
    return true;
}

// Afficher les nombres premiers jusqu'à 1000 avec un retour à la ligne <br />
for ($i = 2; $i <= 1000; $i++) {
    if (estPremier($i)) {
        echo $i . " <br />";
    }
}
?>

