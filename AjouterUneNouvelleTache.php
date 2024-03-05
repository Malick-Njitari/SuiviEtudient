<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>TACHE - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="FicheCSS_4.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Données</H1></div></legend><br>
				<div><form method="post" action="InsertUneNouvelleTache.php" enctype="multipart/form-data">
						<div>
							<label for="MATRICULESTAGIAIRE" class="control-label">STAGIAIRE</label>
							<input type="text" name="MATRICULESTAGIAIRE" id="MATRICULESTAGIAIRE"/><br><br>
						</div>
						<div>
							<label for="NOMDELATACHE" class="control-label">NOM DE LA TACHE</label>
							<input type="text" name="NOMDELATACHE" id="NOMDELATACHE"/><br><br>
						</div>
						<div>
							<label for="DATEDELATACHE" class="control-label">DATE DE LA TACHE</label>
							<input type="date" name="DATEDELATACHE" id="DATEDELATACHE"/><br><br>
						</div>
						
						<div>
							<label for="DESCRIPTIONDELATACHE" class="control-label">DESCRIPTION DE LA TACHE</label>
							<input type="text" name="DESCRIPTIONDELATACHE" id="DESCRIPTIONDELATACHE"/><br><br>
						</div>
						
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="ListingdesTachesduStagiaire.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>