<?php
session_start();

require 'modele/connexion_bdd.php';
require 'modele/req_infos_user.php';

$mail=$_SESSION['mail'];
$req = $bdd->prepare("SELECT test_id_type, date_test, resultat, valeur FROM test JOIN utilisateur ON test.Utilisateur_nSS = utilisateur.nSS WHERE utilisateur.mail = ?");
$req->execute(array($mail));
$results = $req->fetchall();

require ('vues/Resultats_Pilote.php');
?>