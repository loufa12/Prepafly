<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Type_Test.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />    
    <link rel="stylesheet" href="style/Resultat_Test_Visuel.css" />


    <title>PrepaFly - Test</title>
</head>

<body>
    <?php 
    include("bandeau_profil.php");
    include("nav_simple.php"); 
    ?>

    <br /><h3> TEST VISUEL EN COURS </h3><br>

    <div id="attente">
        <p> Votre test est actuellement en cours. Appuyez sur le bouton ci-dessous lorsque le test est terminé. </p>
    </div>

    <div id="bouton_fin">
        <a href="Resultat_Test_Visuel.php" id="fin_test"> Voir le résultat </a>
    </div>


    <?php include("footer.php"); ?>
</body>