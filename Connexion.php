<?php		
	try {
	    $con = new PDO("mysql:host=localhost;dbname=bddsuividesetudiantsenstage",
	        "root", "");
		
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());	
	}	
?>