<!-- Page de contact -->
<div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Nous Contacter</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input required="required" type="last_name" name="last_name" id="last_name" class="form-control input-sm" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="first_name" name="first_name" id="first_name" class="form-control input-sm" placeholder="Prénom">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input required="required" type="email" name="email" id="email" class="form-control input-sm" placeholder="Adresse Email">
                            </div>

                            <div class="form-group">
                                <input required="required" type="sujet" name="sujet" id="sujet" class="form-control input-sm" placeholder="Sujet">
                            </div>

                            <div class="form-group">
                                <textarea required="required" class="form-control" name="message" rows="3" placeholder="Votre Message"></textarea>
                            </div>

                            <input type="submit" value="Envoie" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>


.centered-form {
    margin-top: 120px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>

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