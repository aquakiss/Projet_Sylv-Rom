<!-- Page recherche Par Domaine -->
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

/**
** Partie Recuperer les entreprises par domaine et les afficher
**/	
//recupere tout la table enterprise par ordre croissante des domaines
 $reponse = $connexion->prepare('SELECT categorie FROM entreprise ');
 $reponse->execute();
// On affiche les resultats
$donnees = $reponse->fetchAll();

foreach ($donnees as $donnee) {
	$tmp = $donnee['categorie'];
?>
<!-- <div> 
	<a id=" <?php echo $tmp  ?>" ></a>
</div>   -->
<div class="dropdown DDDomain">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdown<?php echo $tmp ?>" data-toggle="dropdown" aria-expanded="true">
    <?php echo $tmp  ?>  
    <span class="caret"></span>
  </button>
  <ul class="dropdownCategori dropdown-menu dropdown-menu-right" aria-labelledby="dropdown<?php echo $tmp ?>">
    <li role="presentation"><a  href="./Ajax.php?internat">A l'internationale</a></li>
    <li role="presentation"><a  href="./Ajax.php?departm">Par Département</a></li>
    <li role="presentation"><a  href="./Ajax.php?employ">Par nombre d'employées</a></li>
    <li role="presentation"><a  href="./Ajax.php?azcateg">Par ordre alphabétique</a></li>
  </ul>
</div>  
<?php 
} 
?>
<div class="clearfix"></div>
<div class="col-xs-6 div-left"></div>
<div class="col-xs-6 div-right"></div>

