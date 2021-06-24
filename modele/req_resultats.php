<?php

function RecupResults ($bdd)
{
	$req = $bdd->prepare("SELECT * FROM test");
	$req->execute();
	return ($req->fetchAll());
}


function NewTest ($bdd, $date_test, $resultat, $test_id_type, $Utilisateur_nSS, $valeur) {
	$req = $bdd->prepare("INSERT INTO test (date_test, resultat, test_id_type, Utilisateur_nSS, valeur) VALUES (:date_test, :resultat, :test_id_type, :Utilisateur_nSS, :valeur)");
	$req -> execute(array('date_test' => $date_test, 
		'resultat' => $resultat, 
		'test_id_type' => $test_id_type, 
		'Utilisateur_nSS' => $Utilisateur_nSS,
		'valeur' => $valeur));
}


function ResultatsPilote ($bdd, $mail)
{
	$req_result = $bdd->prepare("SELECT date_test, test_id_type, resultat FROM test 
		JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS WHERE mail = ?");
	$req_result->execute(array($mail));
	return $req_result->fetchAll();
}