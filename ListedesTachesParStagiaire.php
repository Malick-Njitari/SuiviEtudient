<?php
	$id=$_GET['NomColonne1'];
	require_once('connexion.php');
		$resultat = $con->query("SELECT NT1.NomColonne1, NT1.NomColonne2, NT2.NomColonne3, NT2.NomColonne4
									FROM NomTable1 NT1, NomTable2 NT2
									WHERE NT1.NomCléPrimaireTable = NT2.NomCléPrimaireTable
									AND NT1.NomColonne1=$id");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" /><title>Listing des NomTable1 Et NomTable2</title>
	</head>
	<body><div><div><div>
				<fieldset><legend><div><H1>Liste des Informations Enregistrées dans La Base de Données</H1></div></legend><br>
					<center><H2><table border=2 cellspacing=2>
						<thead><tr>
								<th>Libellé_1</th>
								<th>Libellé_2</th>
								<th>Libellé_3</th>
								<th>Libellé_4</th>																																																												
							</tr></thead>
						<tbody>
							<?php while($VBLETABLE=$resultat->fetch()){?>
								<tr>
									<td align="center"><?php echo $VBLETABLE['NomColonne1'] ?></td>
									<td align="center"><?php echo $VBLETABLE['NomColonne2'] ?></td>
									<td align="center"><?php echo $VBLETABLE['NomColonne3'] ?></td>
									<td align="center"><?php echo $VBLETABLE['NomColonne4'] ?></td>
									<?php } ?>
						</tbody></table></H2><br><br><a href="index.php">Revenir Sur Le Menu Principal</a>
					</center></fieldset><hr></div></div></div>
	</body>
</html>