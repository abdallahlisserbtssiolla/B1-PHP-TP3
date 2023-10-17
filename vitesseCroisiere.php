<?php
echo "Saisir la vitesse :\n";

$vitesseSaisie = rtrim(fgets(STDIN));


if ($vitesseSaisie < 0) {
    $vitesseCorrigee = 0;
} else {
    $vitesseCorrigee = $vitesseSaisie;
}

echo "Vitesse : ", $vitesseCorrigee, " noeuds\n";
?>
