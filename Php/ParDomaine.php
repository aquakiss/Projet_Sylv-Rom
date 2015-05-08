<!-- Page recherche  -->
<div class="list-group text-center">
	<a class="list-group-item" href="?employ">Employés</a></li>
	<a class="list-group-item" href="?departm">Département</a></li>
	<a class="list-group-item" href="?domai">Domaine</a></li>
	<a class="list-group-item" href="?azcateg">Catégorie</a></li>
</div>

<?php /* sert a rien
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
*/
/**
** Partie Recuperer les entreprises par domaine et les afficher
**/	
/*
//recupere tout la table enterprise par ordre croissante des domaines
 $reponse = $connexion->prepare('SELECT categorie FROM entreprise ');
 $reponse->execute();
// On affiche les resultats
$donnees = $reponse->fetchAll();

foreach ($donnees as $donnee) {
	$tmp = $donnee['categorie'];
?>
<div>
	<a id=" <?php echo $tmp  ?>" ></a>
</div>

<?php 
} */
?>
