<?php
	require_once('connexion.php');
	$Lib1=$_POST['NOMENTREPRISE'];
	$Lib2=$_POST['ADRESSEENTREPRISE'];	
	$Lib3=$_POST['TELEPHONEENTREPRISE'];	
	
	$requete="INSERT INTO ENTREPRISE(NOMENTREPRISE,ADRESSEENTREPRISE,TELEPHONEENTREPRISE) values(?,?,?)";	
	
	$param=array($Lib1,$Lib2,$Lib3);	
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
	
	header("location:ListedesEntreprises.php");
?>