<!-- Page de d'une entreprise -->
<div>
	<h1 class="text-center color"><blockquote>
		Suppression d'une Entreprise précise: 
	</blockquote></h1>
	<form method="post" role="form">
		<fieldset>
			<section id="contourformPDC">
				<div class="input-group">
					<span class="input-group-addon">Nom: </span>
					<input name="nam" type="text" required="required" class="form-control" placeholder="Ex: Biorg">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Identifient: </span>
					<input name="ident" type="text" required="required" class="form-control" placeholder="Ex: 85">
				</div>
				<br>
				<button type="submit" class="btn btn-default navbar-btn">Suppression</button>
				<p name="testP"></p>
			</section>
		</fieldset>
	</form>	
</div>

<?php
if(!empty($_POST["ident"]) && !empty($_POST["nam"]))
{
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
	// recup des diff champs met dans des variables pour la delete dans bdd
	$idd = $_POST["ident"];
	$name = $_POST["nam"];
	//suppression grace aux champs rentrer
	$query= "DELETE FROM entreprise WHERE id = :ide AND Nom = :name";
	$param = array(
	 	'ide'  => $idd,
	 	'name' => $name
	);
	$req = $connexion-> prepare($query);
	$req -> execute($param);   
}
?>