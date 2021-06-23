
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/Accueil_Profil.css" />
    <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
    <link rel="stylesheet" href="style/nav_simple.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>PrepaFly</title>
</head>

<body>
    <?php 
    include("bandeau_profil.php");
    include("nav_simple.php"); 

    echo "<div class=\"bonjour\">Bienvenue $prenom ! Que souhaitez-vous faire aujourd'hui ?</div>";
    ?>

    <div class="choix">
        <div class="num" id="un" onclick="Barre()"><a href="#">Rechercher un pilote et ses informations</a></div>

        <div id="barre" style="display: none;">
            <form action="Recherche_Profil_Mng.php" method="post" autocomplete="off">
            <input list="utilisateurs" id="recherche" name="recherche">
            <datalist id="utilisateurs" >
                <?php
                foreach ($List as $row) {
                    echo "<option value=\"" .$row['nom']. "\">";
                }
                ?>
            </datalist>
            <input type="submit" id="valider" value="Valider"><br><br>
            </form>
        </div>

        <div class="num" id="deux"><a href="Calendrier.php">Programmer des tests à venir</a></div>

        <div class="num" id="trois"><a href="Resultats.php">Consulter l'ensemble des résultats</a></div><br><br>
    </div>

    <?php include("footer.php"); ?>

    <script>
        function Barre() {
            var x = document.getElementById("barre");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            /*var y = document.getElementById("a"+N);
            console.log(y.style.color);
            if (y.style.color = "black") {
                y.style.color = "#4ea3fc";
            } else {
                y.style.color = "black";
            }*/
        }     
    </script> 


</body>
</html>
