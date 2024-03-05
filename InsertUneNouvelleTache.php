<?php
	require_once('connexion.php');
	$Lib1=$_POST['MATRICULESTAGIAIRE'];
	$Lib2=$_POST['NOMDELATACHE'];	
	$Lib3=$_POST['DATEDELATACHE'];	
	$Lib4=$_POST['DESCRIPTIONDELATACHE'];	
	
	$requete="INSERT INTO TACHE(MATRICULESTAGIAIRE,NOMDELATACHE,DATEDELATACHE,DESCRIPTIONDELATACHE) values(?,?,?,?)";	
	
	$param=array($Lib1,$Lib2,$Lib3,$Lib4);
	
	$resultat = $con->prepare($requete);
	
	$resultat->execute($param);	
	
	header("location:ListingdesTachesduStagiaire.php");
?>