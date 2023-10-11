<?php

echo "Saisir la devise :";
$deviseSaisie = rtrim( fgets( STDIN ) );
$devise = strtoupper( $deviseSaisie );

if( $devise == "USD" ){
	$tauxChange = 0.883 ;
	}
elseif( $devise == "CAD" ){
	$tauxChange = 0.686 ;
	}
elseif( $devise == "GBP" ){
	$tauxChange = 1.154 ;
	}
if ($tauxChange == 0){
	echo "Devise Inconnue.\n";
	}
else {
	
	echo "Saisir le prix en ", $devise, ":";
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
