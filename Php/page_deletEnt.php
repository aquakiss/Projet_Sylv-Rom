<!-- Page de d'une entreprise -->
<div>
	<form method="post" role="form">
		<fieldset>
			<section id="contourformPDC">
				<div class="input-group">
					<span class="input-group-addon">Id etudiant: </span>
					<input name="ident" type="text" required="required" class="form-control" placeholder="Ex: 1">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Nom: </span>
					<input name="nam" type="text" required="required" class="form-control" placeholder="Ex: Martin">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Prenom: </span>
					<input name="pre"  type="text" required="required" class="form-control" placeholder="Ex: Martin">
				</div>

				<br>
				<button type="submit" class="btn btn-default navbar-btn">Suppression</button>
				<p name="testP"></p>
			</section>
		</fieldset>
	</form>	
</div>

<?php
if(!empty($_POST["ident"]) && !empty($_POST["nam"]) && !empty($_POST["pre"]))
{
	try
	{
		$connexion = new PDO("mysql:host=localhost;dbname=tpannuaire","root","");
		$connexion->query("SET NAMES UTF8");
	}
	catch (PDOException $e)
	{
		echo 'Echec lors de la tentative de connexion à la Base de donées' . $e->getMessage();
		die();
	}
	// recup des diff champs met dans des variables pour l'update dans bdd
	$idd = $_POST["ident"];
	$name = $_POST["nam"];
	$prenome = $_POST["pre"];
	//suppression grace aux champs rentrer
	 $query= "DELETE FROM etudiant WHERE id = :ide AND Nom = :name AND Prenom = :pren ";
	 $param = array(
	 	'ide' => $idd,
	 	'name' => $name,
	 	'pren' => $prenome
	 	);
	 $req = $connexion-> prepare($query);
	 $req -> execute($param);
}
?>