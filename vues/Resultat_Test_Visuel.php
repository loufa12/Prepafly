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
    include("vues/bandeau_profil.php");
    include("vues/nav_simple.php"); 
    ?>

    <br /><h3> RESULTATS DU TEST VISUEL </h3><br>

    <div id="temps_reaction">
        <p> Votre temps de réaction a été de : </p>
        <p><?=$valeur;?> secondes</p><br>
        <p> Votre score est donc : <span class=<?=$classe;?>><?=$score;?></span></p>
    </div>


    <?php include("vues/footer.php"); ?>
</body>