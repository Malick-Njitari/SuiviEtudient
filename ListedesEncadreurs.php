<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT * FROM ENCADREURPROFESIONNEL");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des ENCADREURS PROFESIONNELS</title>
		<link rel="stylesheet" type="text/css" href="Formulaire1.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des ENCADREURS PROFESIONNELS Enregistrés dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>CODE ENCADREUR</th>
								<th>NOM ENCADREUR</th>
								<th>TELEPHONES</th>											
											
								
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['CODEENCADREURPROFESIONNEL'] ?></td>
									<td><?php echo $VBLETABLE['NOMENCADREURPROFESIONNEL'] ?></td>
									<td><?php echo $VBLETABLE['TELEPHONEENCADREURPROFESIONNEL'] ?></td>
									
																					
										<?php } ?>
									</tr>
						</tbody></table><br><br><a href="AjouterUnEncadreurPro.php">Enregistrer ENCADREUR PROFESIONNEL</a><br><br>
						
						<a href="index.php">RETOUR SUR LE MENU</a>
						
					</center></fieldset><hr></div></div></div>
	</body>
</html>