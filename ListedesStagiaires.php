<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT S.MATRICULESTAGIAIRE, E.NOMENTREPRISE, EP.NOMENCADREURPROFESIONNEL, S.NOMSTAGIAIRE, S.TELEPHONESTAGIAIRE
									FROM ENTREPRISE E, STAGIAIRE S, ENCADREURPROFESIONNEL EP
										WHERE E.IDENTREPRISE = S.IDENTREPRISE 
											AND S.CODEENCADREURPROFESIONNEL = EP.CODEENCADREURPROFESIONNEL");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des STAGIAIRES</title>
		<link rel="stylesheet" type="text/css" href="Formulaire1.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des STAGIAIRES Enregistrés dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>MATRICULE STAGIAIRE</th>
								<th>NOM ENTREPRISE</th>
								<th>NOM ENCADREUR PROFESIONNEL</th>											
								<th>NOM STAGIAIRE</th>											
								<th>TELEPHONES STAGIAIRE</th>											
											
											
								
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['MATRICULESTAGIAIRE'] ?></td>
									<td><?php echo $VBLETABLE['NOMENTREPRISE'] ?></td>
									<td><?php echo $VBLETABLE['NOMENCADREURPROFESIONNEL'] ?></td>
									<td><?php echo $VBLETABLE['NOMSTAGIAIRE'] ?></td>
									<td><?php echo $VBLETABLE['TELEPHONESTAGIAIRE'] ?></td>
									
																					
										<?php } ?>
									</tr>
						</tbody></table><br><br><a href="AjouterUnStagiaire.php">Enregistrer STAGIAIRE</a><br><br>
						
						<a href="index.php">RETOUR SUR LE MENU</a>
						
					</center></fieldset><hr></div></div></div>
	</body>
</html>