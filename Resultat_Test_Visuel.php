<?php
session_start();

$mail = $_SESSION['mail'];


include("controleurs/Fonctions_Logs.php");

require 'modele/connexion_bdd.php';
require 'modele/req_resultats.php';
require 'modele/req_infos_user.php';

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Pour voir les erreurs SQL


$object = "G2D~";

// Récup des logs
$logs = Logs($object);
 
// Récup de la dernière trame
$lastTrame = end($logs);

// Valeur du test
$dict = TradLogs($lastTrame);
$valeur = $dict['Valeur'];

if ($valeur < 500 && $valeur > 0) {
	$score = "A";
	$scoreAff = "A &#128526";
	$classe = "vert";
}
elseif ($valeur > 500 && $valeur < 1000) {
	$score = "B";
	$scoreAff = "B &#128578";
	$classe = "jaune";
}
elseif ($valeur > 1000 && $valeur < 1500) {
	$score = "C";
	$scoreAff = "C &#128528";
	$classe = "orange";
}
else {
	$score = "D";
	$scoreAff = "D &#128533";
	$classe = "rouge";
}

$date_test = date('d-m-y h:i:s');
$type_test = "visuel";
$nSS = IdFromMail($bdd, $mail);

NewTest($bdd, $date_test, $score, $type_test, $nSS);

require("vues/Resultat_Test_Visuel.php");