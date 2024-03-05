<?php
	require_once('connexion.php');
		$resultat = $con->query("SELECT T.IDTACHE, S.NOMSTAGIAIRE, T.NOMDELATACHE, T.DATEDELATACHE, T.DESCRIPTIONDELATACHE
									FROM STAGIAIRE S, TACHE T
										WHERE S.MATRICULESTAGIAIRE = T.MATRICULESTAGIAIRE");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Liste des TACHE</title>
		<link rel="stylesheet" type="text/css" href="Formulaire1.css">
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des TACHE Enregistrées dans La Base de Données</H1></div></legend><br>
					<center><table border=2 cellspacing=2>
						<thead><tr>
								<th>ID TACHE</th>
								<th>NOM STAGIAIRE</th>
								<th>NOM DE LA TACHE</th>											
								<th>DATE DE LA TACHE</th>											
								<th>DESCRIPTION DE LA TACHE</th>											
											
											
								
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['IDTACHE'] ?></td>
									<td><?php echo $VBLETABLE['NOMSTAGIAIRE'] ?></td>
									<td><?php echo $VBLETABLE['NOMDELATACHE'] ?></td>
									<td><?php echo $VBLETABLE['DATEDELATACHE'] ?></td>
									<td><?php echo $VBLETABLE['DESCRIPTIONDELATACHE'] ?></td>
									
																					
										<?php } ?>
									</tr>
						</tbody></table><br><br><a href="AjouterUneNouvelleTache.php">Enregistrer TACHE</a><br><br>
						
						<a href="index.php">RETOUR SUR LE MENU</a>
						
					</center></fieldset><hr></div></div></div>
	</body>
</html>