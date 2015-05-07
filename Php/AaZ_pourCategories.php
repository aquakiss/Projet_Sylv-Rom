<!-- Recherche par ordre alpha de categorie pas de nom-->
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
 $reponse = $connexion->prepare('SELECT nom FROM entreprise ORDER BY categorie ASC');
 $reponse->execute();
// On affiche les resultats
$donnees = $reponse->fetchAll();

//tableau d'image -  a changer avec les vrais
$images = array(
	'16'
);
foreach ($donnees as $donnee) {
?>
	<div class="grid" id="PInterna">
		<?php
		foreach ($images as $imagesansS)
		{
		?>
			<figure class="effect-terry">
				<img src="HoverEffectIdeas/img/<?php echo $imagesansS; ?>.jpg" alt="img16"/>
				<figcaption>
					<h2 id="h2AtooZ"><?php echo $donnee['nom']; ?></h2>
					<p>
						<a href="?Accueil"><i class="fa fa-fw fa-home"></i></a>
						<a href="?departs"><i class="fa fa-fw fa-heart"></i></a>
						<a href="#"><i class="fa fa-fw fa-share"></i></a>
						<a href="#"><i class="fa fa-fw fa-tags"></i></a>
					</p>
				</figcaption>			
			</figure>
		<?php
		}
		?>
	</div>
	<?php
}
?>
