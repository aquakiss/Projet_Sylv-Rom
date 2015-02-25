<?php
	if(isset($_GET["Accueil"]))
	{
		include("Php/accueil.php"); // page acceuil
	}
	elseif(isset($_GET["Entrep"]))
	{
		include("Php/entreprise.php"); // page des entreprises
	}
	elseif(isset($_GET["contactPro"]))
	{
	 	include("Php/ContactPro.php");  // page du formulaire de contact
	}
	else{
		include("Php/accueil.php"); // par défault page d'acceuil.
	}
?>