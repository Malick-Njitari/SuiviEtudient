<?php
	require_once('connexion.php');
	$Lib1=$_POST['MATRICULESTAGIAIRE'];
	$Lib2=$_POST['IDENTREPRISE'];	
	$Lib3=$_POST['CODEENCADREURPROFESIONNEL'];	
	$Lib4=$_POST['NOMSTAGIAIRE'];	
	$Lib5=$_POST['TELEPHONESTAGIAIRE'];	
	
	$requete="INSERT INTO STAGIAIRE(MATRICULESTAGIAIRE,IDENTREPRISE,CODEENCADREURPROFESIONNEL,NOMSTAGIAIRE,TELEPHONESTAGIAIRE) values(?,?,?,?,?)";	
	
	$param=array($Lib1,$Lib2,$Lib3,$Lib4,$Lib5);	
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
	
	header("location:ListedesStagiaires.php");
?>