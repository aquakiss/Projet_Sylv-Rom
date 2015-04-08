<!-- Entreprise PAge 'fiche' -->

<?php
try
	{
		$connexion = new PDO("mysql:host=localhost;dbname=enterprise","root","");
		$connexion->query("SET NAMES UTF8");
	}
	catch (PDOException $e)
	{
		echo 'Echec lors de la tentative de connexion à la Base de donées' . $e->getMessage();
		die();
	}
//recupere tout la table contact par ordre decroissante des dates
 $reponse = $connexion->prepare('SELECT nom  FROM entreprise ORDER BY domaine ASC');
 $reponse->execute();
// On affiche les resultats
$donnees = $reponse->fetchAll();
?>