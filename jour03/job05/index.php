<?php
// Créer une variable de type string avec le texte donné
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

// Créer le dictionnaire pour stocker les résultats
$dic = [
    'voyelles' => 0,  // Compteur des voyelles
    'consonnes' => 0  // Compteur des consonnes
];

// Liste des voyelles
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcourir la chaîne et compter les voyelles et consonnes
for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];

    // Vérifier si le caractère est une lettre
    if (ctype_alpha($char)) {
        // Vérifier si c'est une voyelle
        if (in_array($char, $voyelles)) {
            $dic['voyelles']++;
        } else {
            // Sinon, c'est une consonne
            $dic['consonnes']++;
        }
    }
}

// Afficher les résultats dans un tableau HTML
echo '<table border="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>' . $dic['voyelles'] . '</td>
                <td>' . $dic['consonnes'] . '</td>
            </tr>
        </tbody>
      </table>';
?>
