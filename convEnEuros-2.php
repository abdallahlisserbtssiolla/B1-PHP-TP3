<?php

echo "Saisir la devise :";
$deviseSaisie = strtoupper(rtrim( fgets( STDIN ) ) );

if( $deviseSaisie == "USD" ){
	$tauxChange = 0.883 ;
	}
elseif( $deviseSaisie == "CAD" ){
	$tauxChange = 0.686 ;
	}
elseif( $deviseSaisie== "GBP" ){
	$tauxChange = 1.154 ;
	}
elseif( $deviseSaisie== "RUB" ){
	$tauxChange = 0.013; ;
	}
if ($tauxChange == 0){
	echo "Devise Inconnue.\n";
	}
else {
	
	echo "Saisir le prix en ", $deviseSaisie, ":";
	$prix = rtrim( fgets( STDIN ) );
	
	if( is_numeric( $prix )){
		$prixEuros = $prix * $tauxChange;
		echo "Prix en euros :", $prixEuros , "€.\n";
	}
	else {
		echo "La valeur saisie:", $prixEuros, "€.\n";
	}
}
?>
