<?php
session_start();

$mail = $_SESSION['mail'];

include("modele/req_resultats.php");

require ('vues/Resultat_Pilote.php');