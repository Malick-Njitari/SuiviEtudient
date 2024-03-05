<?php
	require_once('connexion.php');
	$Lib1=$_POST['CODEENCADREURPROFESIONNEL'];
	$Lib2=$_POST['NOMENCADREURPROFESIONNEL'];	
	$Lib3=$_POST['TELEPHONEENCADREURPROFESIONNEL'];	
	
	$requete="INSERT INTO ENCADREURPROFESIONNEL(CODEENCADREURPROFESIONNEL,NOMENCADREURPROFESIONNEL,TELEPHONEENCADREURPROFESIONNEL) values(?,?,?)";	
	
	$param=array($Lib1,$Lib2,$Lib3);	
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
	
	header("location:ListedesEncadreurs.php");
?>