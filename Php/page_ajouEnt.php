<!-- Page d'ajout d'une entreprise -->
<div>
	<form enctype="multipart/form-data" method="post" role="form">
		<fieldset>
			<section id="contourformPDC">
				<div class="input-group">
					<span class="input-group-addon">Nom: </span>
					<input name="nam" type="text" required="required" class="form-control" placeholder="Ex: Martin">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Prenom: </span>
					<input name="pre"  type="text" required="required" class="form-control" placeholder="ex: Martin">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Adresse: </span>
					<input name="addr"  type="text" required="required" class="form-control" placeholder="ex: 3, rue des biscuits">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Classe: </span>
					<input name="clas"  type="text" required="required" class="form-control" placeholder="CP12">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Numero de Telephone: </span>
					<input name="mobil"  type="text" required="required" class="form-control" placeholder="0631901580">
				</div>

				<br>
				<div class="input-group">
					<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
					<input type="file" name="fic" size=50 />
				</div>
				
				<br>
				<button type="submit" class="btn btn-default navbar-btn">Sign in</button>
				<p name="testP"></p>
			</section>
		</fieldset>
	</form>	
</div>

<?php
if(!empty($_POST["nam"]) && !empty($_POST["pre"]) && !empty($_POST["clas"]) && !empty($_POST["addr"]) && !empty($_POST["mobil"])) {
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
	// recup des diff champs met dans des variables pour insert dans bdd
	$name = $_POST["nam"];
	$prenome = $_POST["pre"];
	$clases = $_POST["clas"];
	$adre = $_POST["addr"];
	$numeroTele = $_POST["mobil"];
	//insertion avec les champs rentrer
	 $query = "INSERT INTO etudiant (Nom, Prenom, classe, adresse, numeroTelephone, CreePar) VALUES (:name, :pren, :classs, :address, :numtel, 1)";
	 $param = array(
	 	'name' => $name,
	 	'pren' => $prenome,
	 	'classs' => $clases,
	 	'address' => $adre,
	 	'numtel' => $numeroTele
	 	);
	 $req = $connexion-> prepare($query);
	 $req -> execute($param);
}
?>