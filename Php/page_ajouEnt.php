<!-- Page d'ajout d'une entreprise -->
<div>
	<h1 class="text-center color"><blockquote>
		Ajout d'une Entreprise: 
	</blockquote></h1>
	<form enctype="multipart/form-data" method="post" role="form">
		<fieldset>
			<section id="contourformPDC">
				<div class="input-group">
					<span class="input-group-addon">Nom: </span>
					<input name="nam" type="text" required="required" class="form-control" placeholder="Ex: Vichy">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Nombre d'employés: </span>
					<input name="nb"  type="text" required="required" class="form-control" placeholder="ex: 2000">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Département: </span>
					<input name="dept"  type="text" required="required" class="form-control" placeholder="ex: Aquitaine">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Domaine: </span>
					<input name="dom"  type="text" required="required" class="form-control" placeholder="ex: Biologie">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Catégorie: </span>
					<input name="cat"  type="text" required="required" class="form-control" placeholder="ex: Science">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Description: </span>
					<input name="des"  type="text" required="required" class="form-control" placeholder="ex: blablabla">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Présentation: </span>
					<input name="pres"  type="text" required="required" class="form-control" placeholder="ex: superbe statue">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Lien interview: </span>
					<input name="lien"  type="text" required="required" class="form-control" placeholder="lien d'une interview de sylvain">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">International: </span>
					<input name="inter"  type="text" required="required" class="form-control" placeholder="oui ou non">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Partenaire: </span>
					<input name="parte"  type="text" required="required" class="form-control" placeholder="si partenaire ou non">
				</div>
				<br>
				<br>
				<div class="input-group">
					<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
					<input type="file" name="fic" size=50 />
				</div>
				
				<br>
				<button type="submit" class="btn btn-default navbar-btn">Créé</button>
			</section>
		</fieldset>
	</form>	
</div>

<?php
if(!empty($_POST["nam"]) && !empty($_POST["nb"]) && !empty($_POST["dept"]) && !empty($_POST["dom"]) && !empty($_POST["cat"])  && !empty($_POST["des"]) && !empty($_POST["pres"]) && !empty($_POST["lien"]) && !empty($_POST["inter"]) && !empty($_POST["parte"])) {
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
	// recup des diff champs met dans des variables pour insert dans bdd
	$name 		= $_POST["nam"];
	$nbemploy	= $_POST["nb"];
	$depta 		= $_POST["dept"];
	$doma 		= $_POST["dom"];
	$categ		= $_POST["cat"];
	$descri 	= $_POST["des"];
	$present 	= $_POST["pres"];
	$llieninter = $_POST["lien"];
	 
	$isinternationale = 0;
	if($_POST["inter"] == "oui")
	{
		$isinternationale = 1;
	}
	elseif ($_POST["inter"] == "non")
	{
		$isinternationale = 0;
	}
	else
	{
		$isinternationale = 0;
	}

	$ispartenaire	  = 0;
	if($_POST["parte"] == "oui")
	{
		$ispartenaire = 1;
	}
	elseif ($_POST["parte"] == "non")
	{
		$ispartenaire = 0;
	}
	else
	{
		$ispartenaire = 0;
	}

	$partena  = $ispartenaire;
	$internal = $isinternationale;
	//insertion avec les champs rentrer
	$query = "INSERT INTO entreprise (nom, nb_employe, departement, domaine, categorie, description, presentation, lien_interview, international, partenaire) VALUES (:nam, :emplo, :depa, :domai, :catego, :descrip, :prese, :intvew, :inttl, :partn)";
	
	$param = array(
	 	'nam' 		=> $name, 		
		'emplo' 	=> $nbemploy,	
		'depa' 		=> $depta,		
		'domai' 	=> $doma, 		
		'catego' 	=> $categ,		
		'descrip' 	=> $descri, 	
		'prese' 	=> $present, 	
		'intvew'	=> $llieninter,
		'inttl'		=> $internal, 	
		'partn' 	=> $partena 	
	 	);
	$req = $connexion-> prepare($query);
	$req -> execute($param);
}
?>