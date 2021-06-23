
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/AjoutUtilisateur.css" />
<link rel="stylesheet" href="style/bandeau_prepafly.css"/>
<link rel="stylesheet" href="style/nav_simple.css" />
<link rel="stylesheet" href="style/footer.css" />
<title>PrepaFly - Ajout Utilisateur</title>
</head>

<body>

	<header>
	    <?php 
	    include("vues/bandeau_profil.php");
	    include("vues/nav_simple.php"); 
	    ?>
	</header>

	<section>
		
		<h3>AJOUT D'UN UTILISATEUR</h3>

		<?php 
			if (isset($_SESSION['message_ajout'])) {
				echo("<h4>".$_SESSION['message_ajout']."</h4>"); 
			}
		?>

		<form action="Ajout_Utilisateur.php" method="post" id="form"> 
			<div id="formulaire">
				<div id="form_part1">

					<div class="champs1">
						<label for="nss">Numéro de Sécurité Sociale :</label>
						<input type="number_format" maxlength="15" id="nss" name="nss" size="25" required><span id="msg_code" style="color: red"></span>
						<br>
					</div>

					<div class="champs1">
						<label for="nom">Nom :</label>
						<input type="text" id="nom" name="nom" onchange="this.value=this.value.toUpperCase()" required>
						<br>
					</div>

					<div class="champs1">
						<label for="prenom">Prénom :</label>
						<input type="text" id="prenom" name="prenom" required>
						<br>
					</div>

					<div class="champs1">
						<label for="sexe" name="sexe">Sexe :</label>
						<select name="sexe" required>
							<option value="Homme">Homme</option>
				            <option value="Femme">Femme</option>
				            <option value="Non Précisé">Non précisé</option>
						</select>
						<br>
					</div>

					<div class="champs1">
						<label for="date_naissance">Date de naissance :</label>
						<input type="Date" id="date_naissance" name="date_naissance" required>
						<br>
					</div>

					<div class="champs1">
						<label for="adresse">Adresse :</label>
						<input type="text" id="adresse" name="adresse" size="40">
						<br>
					</div>

					<div class="champs1">
						<label for="ville">Ville :</label>
						<input type="text" id="ville" name="ville" size="30" required>
						<br>
					</div>

					<div class="champs1">
						<label for="pays">Pays :</label>
						<input type="text" id="pays" name="pays" size="25" required>
						<br>
					</div>
				</div>

				<div id="form_part2">
					<div class="champs2">
						<label for="mail">Mail professionnel :</label>
						<input onchange="VerifMail()" type="email" id="mail" name="mail" size="40" required>
						<br>
					</div>

					<div class="champs2">
						<label for="mailconf">Confirmer le mail :</label>
						<input onchange="VerifMail()" type="email" id="mailconf" name="mailconf" size="40" required><span id="verifmail" style="color:red;"></span>
						<br>
					</div>

					<div class="champs2">
						<label for="mdp">Mot de passe :</label>
						<input type="text" id="mdp" name="mdp" size="20" required>
						<br>
					</div>

					<div class="champs2">
						<label for="societe">Société :</label>
						<input type="text" id="societe" name="societe" size="30" required>
						<br>
					</div>

					<div class="champs2">
						<label for="statut" name="statut">Statut :</label>
						<select name="statut" required>
							<option value="p">Pilote</option>
				            <option value="m">Manager</option>
				            <option value="a">Administrateur</option>
						</select>
						<br><br>
					</div>

				</div>
			</div>

			<div class="end">
                <a href="#" onclick="resetForm();" id="reinit" type="reset">Réinitialiser</a>
        		<input id="valider" type="submit" value="Enregistrer"><br>
            </div>
		</form>
	</section>

<?php include("vues/footer.php"); ?>

</body>

<script type="text/javascript">
    function resetForm() {
        document.getElementById("form").reset();
    }
</script>

<script type="text/javascript" src="fonctions.js" ></script>


</html>