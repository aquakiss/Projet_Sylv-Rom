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
//recupere tout la table contact par ordre decroissante des dates
 $reponse = $connexion->prepare('SELECT nom  FROM entreprise ORDER BY domaine ASC');
 $reponse->execute();
// On affiche les resultats
$donnees = $reponse->fetchAll();

//tableau d'image -  a changer avec les vrais
$images = array(
	'16'
);
foreach ($donnees as $donnee) {
?>
<?php
		foreach ($images as $imagesansS)
		{
		?>
		<div class="grid" id="h2Domaindiv">
			<figure class="effect-terry">
				<img src="HoverEffectIdeas/img/<?php echo $imagesansS; ?>.jpg" alt="img16"/>
				<figcaption>
					<h2 id="h2AtooZ"><span><?php echo $donnee['nom']; ?></span></h2>
					<p>
						<a href="?Accueil"><i class="fa fa-fw fa-home"></i></a>
						<a href="#"><i class="fa fa-fw fa-heart"></i></a>
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