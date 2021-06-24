<?php

function RecupResults ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM test");
	$req->execute();
	return ($req->fetchAll());
}


function RecupMesures ($bdd) {
	$req = $bdd->prepare("SELECT * FROM mesure");
	$req->execute();
	return ($req->fetchAll());
}


function NewMesure ($bdd, $valeur, $test) 
{
	$req = $bdd->prepare("INSERT INTO mesure (valeur, test) VALUES (:valeur, :test)");
	$req->execute(array('valeur' => $valeur, 'test' => $test));
}


function NewTest ($bdd, $date_test, $resultat, $test_id_type, $Utilisateur_nSS) {
	$req = $bdd->prepare("INSERT INTO test (date_test, resultat, test_id_type, Utilisateur_nSS) VALUES (:date_test, :resultat, :test_id_type, :Utilisateur_nSS)");
	$req -> execute(array('date_test' => $date_test, 
		'resultat' => $resultat, 
		'test_id_type' => $test_id_type, 
		'Utilisateur_nSS' => $Utilisateur_nSS));
}


function ResultatsPilote ($bdd, $mail)
{
	$req_result = $bdd->prepare("SELECT date_test, test_id_type, resultat FROM test 
		JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS WHERE mail = ?");
	$req_result->execute(array($mail));
	return $req_result->fetchAll();
}