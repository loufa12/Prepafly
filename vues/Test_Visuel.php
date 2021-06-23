<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Type_Test.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />

    <title>PrepaFly - Test</title>
</head>

<body>
    <?php 
    include("bandeau_profil.php");
    include("nav_simple.php"); 
    ?>

    <br /><h3> TEST VISUEL </h3><br>

    <div id="durée">
    	<p>Ce test a pour but de mesurer votre temps de réaction à un stimulus visuel. Une fois le test terminé vous pourrez voir votre score.</p>
        <img id="img_cockpit" src='images/test_auditif.jpg'>
    </div>

    <div id="bouton">
    	<a href="Test_Visuel_en_Cours.php" id="lancer_test">Lancer le test</a>
    </div>


    <?php include("footer.php"); ?>
</body>

</html>
