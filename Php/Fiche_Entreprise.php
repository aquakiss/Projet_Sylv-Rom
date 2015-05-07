<!-- Entreprise PAge 'fiche' -->

<?php

	$nom = $_GET['entreprise'];
	$req = $connexion->prepare("SELECT * FROM entreprise WHERE nom = :nom");
	$req->execute(array(
				'nom'=>$nom
			));
	$req = $req->fetch();
?>

<h1 style="color:black; text-align:center;"><?php echo $req['nom']; ?></h1>
<div style="color:black;margin-top:100px;">Nombre d'employés : <?php echo $req['nb_employe']; ?></div>
<div style="color:black;margin-top:50px;">Département : <?php echo $req['departement']; ?></div>
<div style="color:black;margin-top:50px;">Domaine : <?php echo $req['domaine']; ?></div>
<div style="color:black;margin-top:50px;">Catégorie : <?php echo $req['categorie']; ?></div>
<div style="color:black;margin-top:50px;">Présentation de l'entreprise : <?php echo $req['presentation']; ?></div>
<div style="color:black;margin-top:50px;">Présent à l'international : 
	<?php 
		if($req['international'] == 1)
			echo ("Oui");
		else
			echo ("Non");

	?>
</div>