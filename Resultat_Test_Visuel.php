<?php

include("controleurs/Fonctions_Logs.php");

$object = "G2D~";

// Récup des logs
$logs = Logs($object);
 
// Récup de la dernière trame
$lastTrame = end($logs);

// Valeur du test
$dict = TradLogs($lastTrame);
$valeur = $dict['Valeur'];

if ($valeur < 500 && $valeur > 0) {
	$score = "A  &#128526";
	$classe = "vert";
}
elseif ($valeur > 500 && $valeur < 1000) {
	$score = "B  &#128578";
	$classe = "jaune";
}
elseif ($valeur > 1000 && $valeur < 1500) {
	$score = "C  &#128528";
	$classe = "orange";
}
else {
	$score = "D  &#128533";
	$classe = "rouge";
}



require("vues/Resultat_Test_Visuel.php");