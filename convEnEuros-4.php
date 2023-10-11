<?php

echo "Saisir la devise :";
$deviseSaisie = strtoupper(rtrim(fgets(STDIN)));

$tauxChange = 0;

switch ($deviseSaisie) {
    case "USD":
        $tauxChange = 0.883;
        break;
    case "CAD":
        $tauxChange = 0.686;
        break;
    case "GBP":
        $tauxChange = 1.154;
        break;
    case "RUB":
        $tauxChange = 0.013;
        break;
}

if ($tauxChange != 0) {
    echo "Saisir le prix en ", $deviseSaisie, ":";
    $prix = rtrim(fgets(STDIN));

    if (is_numeric($prix)) {
        $prixEuros = $prix * $tauxChange;
        echo "Prix en euros : $prixEuros €.\n";
    } else {
        echo "La valeur saisie n'est pas un nombre.\n";
    }
} else {
    echo "Devise Inconnue.\n";
}
?>
