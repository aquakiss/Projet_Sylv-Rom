<!-- Page de contact -->
<div id="formul">
	<form method="post" id="gform">
		<fieldset>
			<h2><b>Pour nous contacter: </b></h2>
			<section>
				<label>Prénom</label>
				<input name="firstname" class="inpform" type="text" required="required" placeholder="à remplir" style="width:200px; margin-top: 1.5%;"/><br/>
				<label>Nom</label>
				<input name="name"name type="text" required="required" placeholder="à remplir" style="width:200px; margin-top: 1%; margin-left: 3.9%;"/><br/>
				<label>Le sujet</label>
				<input name="sujet" class="inpform" type="text" required="required" placeholder="à remplir" style="width:200px; margin-top: 1%;"/><br/>			
				<textarea name="comment" cols="100" style="margin: 2%;" placeholder="... Ici votre message ..."></textarea>
				<input class="btn btn-default" type="submit" value="Envoie du formulaire" style="margin-left: 24.80%; margin-bottom:1%;"/>
			</section>
		</fieldset>
	</form>
</div>

<?php /*
	// connexion a la bdd
	if(!empty($_POST["name"]) && !empty($_POST["firstname"]) && !empty($_POST["sujet"]) && !empty($_POST["comment"]))
	//test si les champs ne sont pas vide
	{
	try
	{
		$connexion = new PDO("mysql:host=localhost;dbname=controledecembre","root","");
		$connexion->query("SET NAMES UTF8");
	}
	catch (PDOException $e)
	{
		echo 'Echec lors de la tentative de connexion à la Base de donées' . $e->getMessage();
		die();
	}
	// assignation des name a des variable pour etre rentre dans la bdd
	$nomdPerson          = $_POST["name"]; //champ nom
	$pnomPerson          = $_POST["firstname"]; //champ prenom
	$SujPerson            = $_POST["sujet"]; //champ sujet
	$txtcomentairePerson = $_POST["comment"]; // textarea des commentaire
	
	//Insertion données dans bdd
	$rtotot = $connexion->prepare("INSERT INTO contact(Nom, Prenom, Sujet, Commentaire, date_crea)
								VALUES(:nom, :prenom, :sujet, :message, NOW())");
	$rtotot->execute(array(
		'nom' 	 	  => $nomdPerson,
		'prenom' 	  => $pnomPerson,
		'sujet'	 	  => $SujPerson,
		'message' => $txtcomentairePerson,
	));
		echo 'Votre message a bien été reçu.'; //apres envoie montre a la personne que l'envoie c'est bien fait
	}
	else {
		echo 'Rentre des valeurs svp.'; //informe l'utilisateur qu'il manque un/des champs a remplir
	}											 
	*/
?>