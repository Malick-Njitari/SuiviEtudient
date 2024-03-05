<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>STAGIAIRE - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="FicheCSS_3.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Données</H1></div></legend><br>
				<div><form method="post" action="InsertUnStagiaire.php" enctype="multipart/form-data">
						<div>
							<label for="MATRICULESTAGIAIRE" class="control-label">MATRICULESTAGIAIRE</label>
							<input type="text" name="MATRICULESTAGIAIRE" id="MATRICULESTAGIAIRE"/><br><br>
						</div>
						<div>
							<label for="IDENTREPRISE" class="control-label">ENTREPRISE</label>
							<input type="text" name="IDENTREPRISE" id="IDENTREPRISE"/><br><br>
						</div>
						<div>
							<label for="CODEENCADREURPROFESIONNEL" class="control-label">ENCADREUR PROF</label>
							<input type="text" name="CODEENCADREURPROFESIONNEL" id="CODEENCADREURPROFESIONNEL"/><br><br>
						</div>
						
						<div>
							<label for="NOMSTAGIAIRE" class="control-label">NOM STAGIAIRE</label>
							<input type="text" name="NOMSTAGIAIRE" id="NOMSTAGIAIRE"/><br><br>
						</div>
						
						<div>
							<label for="TELEPHONESTAGIAIRE" class="control-label">TELEPHONES STAGIAIRE</label>
							<input type="text" name="TELEPHONESTAGIAIRE" id="TELEPHONESTAGIAIRE"/><br><br>
						</div>
						
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="ListedesStagiaires.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>	