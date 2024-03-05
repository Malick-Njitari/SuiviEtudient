<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT * FROM ENTREPRISE");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des DENTREPRISES</title>
		<link rel="stylesheet" type="text/css" href="Formulaire1.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des DENTREPRISE Enregistrées dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>ID ENTREPRISE</th>
								<th>NOM ENTREPRISE</th>
								<th>ADRESSE ENTREPRISE</th>							
								<th>TELEPHONE ENTREPRISE</th>							
											
								
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['IDENTREPRISE'] ?></td>
									<td><?php echo $VBLETABLE['NOMENTREPRISE'] ?></td>
									<td><?php echo $VBLETABLE['ADRESSEENTREPRISE'] ?></td>
									<td><?php echo $VBLETABLE['TELEPHONEENTREPRISE'] ?></td>
									
																					
										<?php } ?>
									</tr>
						</tbody></table><br><br><a href="AjouterUneEntreprise.php">Enregistrer DENTREPRISE</a><br><br>
						
						<a href="index.php">RETOUR SUR LE MENU</a>
						
					</center></fieldset><hr></div></div></div>
	</body>
</html>