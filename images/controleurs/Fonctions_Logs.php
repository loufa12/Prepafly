<?php


// fonction de récupération des logs

function Logs(string $object) : array
{
    # On récupère les logs depuis le serveur
    $url = "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=" . $object;
    $data = file_get_contents($url);
    $data = substr($data, 25);

    # On met en forme en tableau
    $data_tab = str_split($data,33);
    array_pop($data_tab);

    return $data_tab;
}


// --------------------------------------------------//



// fonction de décodage des logs
function TradLogs(string $trame): array
{
    list($trame, $obj, $req, $type, $num, $valeur, $tim, $chk, $year, $month, $day, $hour, $min, $sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");

    $dict = array (
    'TypeTrame' => $trame,
    'NumObjet' => $obj,
    'TypeReq' => $req,
    'TypeCapteur' => $type,
    'NumCapteur' => $num,
    'Valeur' => $valeur,
    'TimeStamp' => $tim,
    'Cheksum' => $chk,
    'Annee' => $year,
    'Mois' => $month,
    'Jour' => $day,
    'Heure' => $hour,
    'Minutes' => $min,
    'Secondes' => $sec);

    return $dict;
}