<?php
	require_once('connexion.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>ENCADREUR PROFESIONNEL - Formulaire Ajouter</title>
		<link rel="stylesheet" type="text/css" href="FicheCSS_2.css"></head>
	<body><center><div><br><div>
				<fieldset><legend><div><H1>Enregistrement Nouvelle Données</H1></div></legend><br>
				<div><form method="post" action="InsertUnEncadreurPro.php" enctype="multipart/form-data">
						<div>
							<label for="CODEENCADREURPROFESIONNEL" class="control-label">CODE ENCADREUR</label>
							<input type="text" name="CODEENCADREURPROFESIONNEL" id="CODEENCADREURPROFESIONNEL"/><br><br>
						</div>
						<div>
							<label for="NOMENCADREURPROFESIONNEL" class="control-label">NOM ENCADREUR</label>
							<input type="text" name="NOMENCADREURPROFESIONNEL" id="NOMENCADREURPROFESIONNEL"/><br><br>
						</div>
						<div>
							<label for="TELEPHONEENCADREURPROFESIONNEL" class="control-label">TELEPHONES</label>
							<input type="text" name="TELEPHONEENCADREURPROFESIONNEL" id="TELEPHONEENCADREURPROFESIONNEL"/><br><br>
						</div>
						
						<button type="submit">Enregistrer</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<button type="reset">Rétablir</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a href="ListedesEncadreurs.php">Retour Sur Le Listing</a>
					</form></div></fieldset></div></div></center></body>
</html>