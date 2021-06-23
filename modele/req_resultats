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


function NewTest ($bdd, $date_test, $resultat, $type_test, $nSS) {
	$req = $bdd->prepare("INSERT INTO test (date_test, resultat, type_test, nSS) VALUES (:date_test, :resultat, :type_test, :nSS");
	$req->execute(array('date_test' => $date_test, 'resultat' => $resultat, 'type_test' => $type_test, 'nSS' => $nSS));
}