<?php
	try
	{
		$connexion = new PDO('mysql:host=localhost;dbname=enterprise', 'root', '');
		$connexion->exec("SET CHARACTER SET utf8");
	}
	catch(Exception $e)
	{
		die('Erreur :' . $e->getMessage());
	}

	include("Php/redirection.php"); // redirection des pages en fonction des ?...
?>