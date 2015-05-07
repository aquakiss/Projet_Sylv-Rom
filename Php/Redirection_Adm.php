<!-- gestion de redirection pour les pages admin -->
<?php

    if(isset($_GET["Add"]))
	{
		echo "string";
	 	include("Php/page_ajouEnt.php");  // page d'ajout enterprise
	}
	elseif(isset($_GET["Upd"]))
	{
	 	include("Php/page_modifEnt.php");  // page de modif d'enterprise
	}
	elseif(isset($_GET["Dele"]))
	{
	 	include("Php/page_deletEnt.php");  // page de suppression enterprise
	}
	elseif(isset($_GET["Acc"]))
	{
	 	include("Php/page_Admin.php");  // page de suppression enterprise
	}
	elseif (isset($_GET["Notif"])) 
	{
		include("Php/page_notification.php"); //page d'affichage des notifications de la page contact
	}
	else
	{
	 	include("Php/page_Admin.php");  // page de l'admin
	}
?>