<!-- Page des entreprise partenjaire au site -->
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
	//recupere tout la table enterprise par ordre croissante des id
	 $reponse = $connexion->query('SELECT *  FROM entreprise');
	// On recup les resultats pour les aff après
	$donnees = $reponse->fetchAll();
?>
<div>
	<?php
	  $nb_partenaire = 0; // determinera si il y a des partenaires
	foreach($donnees as $row)
	{
	  	if($row['partenaire'] == 1) { 
	  		$nb_partenaire ++; 
		 	 ?>
		 	<div class="row">
			  	<div class="col-sm-6 col-md-4" id="ZAddecal">
			 	    <div class="thumbnail">
				    <!--   <img src="..." alt="..."> pas d'image de la bdd pour le moment-->

			    		<div class="caption">
					        <h2 class="text-center"><?php echo $row['nom']; ?></h2>
					        <ul class="list-group">
								<li class="list-group-item">Nombre d'employée : <?php echo $row['nb_employe']; ?> </li>
								<li class="list-group-item">Département : <?php echo $row['departement']; ?> </li>
								<li class="list-group-item">Domaine : <?php echo $row['domaine']; ?> </li>
								<li class="list-group-item">Catégorie : <?php echo $row['categorie']; ?> </li>
							</ul>
					        <p class="text-center">
						        <a href="?Adm&Upd" class="btn btn-warning" role="button">Modifier</a>
						        <a href="?Adm&Dele" class="btn btn-danger" role="button">Supprimer</a>
					    	</p>
				 		</div>
			   		</div>
			 	</div>
			</div>
		  <?php
		}
	}
	if($nb_partenaire == 0){
	?>
		<h2 class="color"> Nous n'avons pas encore de Partenaire, pour toute demande de partenariat veuillez remplir le formulaire de Contact.<br></h1>
		<h4 class="text-center color"><b><em><ins>Cordialement la direction.</ins></em></b></h4>
	<?php
	}
	?>
</div>