
<!DOCTYPE html>
<html lang="fr">
    <link rel="stylesheet" href="style/Resultat.css" />
    <link rel="stylesheet" href="style/bandeau_profil.css"/>
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
<title>PrepaFly - Résultats</title>

<meta charset="UTF-8">

<body>

    <?php 
    if (isset($_SESSION['mail'])) {
          require 'vues/bandeau_profil.php';
    }
    else {
          require 'vues/bandeau_prepafly.php';
    }

    include("vues/nav_simple.php"); 
    ?>

    <br /><h3>RÉSULTATS</h3><br />

    <table id="tableau">
        <tr>
            <th>Type de Test</th>
            <th>Date du Test</th>
            <th>Résultat</th>
            <th>Temps de réaction (ms)</th>
        </tr>
        <?php
    foreach ($results as $row) {
        echo "<tr>";
        for ($i=0; $i<=3; $i++ ) {
            echo "<td>".$row[$i]."</td>";
        }
        echo "</tr>";
    }
    ?>
    </table><br><br><br>

    <?php include("vues/footer.php");?>


</body>
</html>
