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
	elseif (isset($_GET["entreprise"])) 
	{
		include("Php/Fiche_Entreprise.php"); //page fiche de l'entreprise
	}
	else{
		include("Php/accueil.php"); // par défault page d'acceuil.
	}
?>