<!-- Entreprise PAge 'fiche' -->

<?php

	$nom = $_GET['entreprise'];
	$req = $connexion->prepare("SELECT * FROM entreprise WHERE nom = :nom");
	$req->execute(array(
				'nom'=>$nom
			));
	$req = $req->fetch();
?>

<h1 id="Titre_entreprise"><?php echo $req['nom']; ?></h1>
<div id="Info_entreprise">Nombre d'employés : <?php echo $req['nb_employe']; ?></div>
<div class="Infos_entreprise">Département : <?php echo $req['departement']; ?></div>
<div class="Infos_entreprise">Domaine : <?php echo $req['domaine']; ?></div>
<div class="Infos_entreprise">Catégorie : <?php echo $req['categorie']; ?></div>
<div class="Infos_entreprise">Présentation de l'entreprise : <?php echo $req['presentation']; ?></div>
<div class="Infos_entreprise">Présent à l'international : 
	<?php 
		if($req['international'] == 1)
			echo ("Oui");
		else
			echo ("Non");

	?>
</div>