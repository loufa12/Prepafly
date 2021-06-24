<?php

function CreateLogs() {

	$trame = "1G2D~24010001FF";
	$url = "http://projets-tomcat.isep.fr:8080/appService/?ACTION=COMMAND&TEAM=G2D~&TRAME=" . $trame;
	file_get_contents($url);
}

require("vues/Test_Visuel_en_Cours.php");