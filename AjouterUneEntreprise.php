<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>ENTREPRISE - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="FicheCSS_1.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Données</H1></div></legend><br>
				<div><form method="post" action="InsertUneEntreprise.php" enctype="multipart/form-data">
						<div>
							<label for="NOMENTREPRISE" class="control-label">NOM ENTREPRISE</label>
							<input type="text" name="NOMENTREPRISE" id="NOMENTREPRISE"/><br><br>
						</div>
						<div>
							<label for="ADRESSEENTREPRISE" class="control-label">ADRESSE ENTREPRISE</label>
							<input type="text" name="ADRESSEENTREPRISE" id="ADRESSEENTREPRISE"/><br><br>
						</div>
						<div>
							<label for="TELEPHONEENTREPRISE" class="control-label">TELEPHONE ENTREPRISE</label>
							<input type="text" name="TELEPHONEENTREPRISE" id="TELEPHONEENTREPRISE"/><br><br>
						</div>
						
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="ListedesEntreprises.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>