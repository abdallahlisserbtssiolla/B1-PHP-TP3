<?php 

echo "Saisir le nom du port: ","\n"; 

$nomPort = strtolower(rtrim(fgets(STDIN))); 

  

switch ($nomPort) { 

    case "quiberon": 

		$nomDept = "Morbihan"; 

		break; 

    case "sauzon": 

		$nomDept = "Morbihan"; 

		break; 

    case "le palais": 

        $nomDept = "Morbihan"; 

        break; 

    case "concarneau": 

		$nomDept = "Finistère"; 

		break; 

    case "douarnenez": 

        $nomDept = "Finistère"; 

        break; 

    case "piriac-sur-mer": 

		$nomDept = "Loire-Atlantique"; 

        break; 

    case "pornic": 

        $nomDept = "Loire-Atlantique"; 

        break; 

    case "ile-d'yeu": 

        $nomDept = "Vendée"; 

        break; 

    default: 

        $nomDept = null; 

} 

  

if ($nomDept) { 

    echo "Département: $nomDept"; 

} else { 

    echo "Port non rencensé."; 

} 

?> 
