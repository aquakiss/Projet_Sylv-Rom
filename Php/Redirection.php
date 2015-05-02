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
	elseif(isset($_GET["internat"]))
	{
	 	include("Php/Internationale.php");  // page du recherche internationale
	}
	elseif(isset($_GET["departm"]))
	{
	 	include("Php/P_Department.php");  // page du recherche departement
	}
	elseif(isset($_GET["employ"]))
	{
	 	include("Php/Employee.php");  // page Recherche par nombre employees
	}
	elseif(isset($_GET["azcateg"]))
	{
	 	include("Php/AaZ_pourCategories.php");  // page du recherche categories
	}
	elseif(isset($_GET["CoAdm"]))
	{
	 	include("Php/page_coAdm.php");  // page de connection de l'admin
	}
	elseif(isset($_GET["Adm"]))
	{
	 	include("page_AccueilAdmin.php");  // page de l'admin
	}
	else{
		include("Php/accueil.php"); // par défault page d'acceuil.
	}
?>