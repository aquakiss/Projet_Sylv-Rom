<!-- Page de connection -->
<div>
	<form method="post" role="form">
		<fieldset>
			<section>
				<div class="input-group">
					<span class="input-group-addon">Identifiant: </span>
					<input name="ident" type="text" required="required" class="form-control" placeholder="Ex: Tom">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Mot de passe: </span>
					<input name="mdp"  type="text" required="required" class="form-control" placeholder="Mot de Passe">
				</div>
				<br>
				<button type="submit" class="btn btn-default navbar-btn">Connection</button>
			</section>
		</fieldset>
	</form>	
</div>
<?php 
	// connexion a la bdd
	if(!empty($_POST["ident"]) && !empty($_POST["mdp"]))
	//test si les champs ne sont pas vide
	{
		try
		{
			$connexion = new PDO("mysql:host=localhost;dbname=enterprise","root","");
			$connexion->query("SET NAMES UTF8");
		}
		catch (PDOException $e)
		{
			echo 'Echec lors de la tentative de connexion à la Base de donées' .''. $e->getMessage();
			die();
		}

	//echo "Login valide";	
	$id  = $_POST["ident"]; //champ nom
	$mDp = $_POST["mdp"]; //champ prenom
	
/* vérification des logs et création d'un $_Session pas réussit à faire cette partie.
	$reponse = $connexion->prepare('SELECT AdminId, MdP  FROM admon WHERE AdminId = :ident');

    $query->bindValue(':ident',$_POST['ident'], PDO::PARAM_STR);
    $query->execute();
    $data=$query->fetch();
    if ($data['MdP'] == md5($_POST['mdp'])) // Acces OK !
    {
        $_SESSION['pseudo'] = $data['membre_pseudo'];
        $_SESSION['level'] = $data['membre_rang'];
        $_SESSION['id'] = $data['membre_id'];
        $message = '<p>Bienvenue '.$data['AdminId'].', 
            vous êtes maintenant connecté!</p>';  
    }
    else // Acces pas OK !
    {
        $message = '<p>Une erreur s\'est produite 
        pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p>';
    } 
    $query->CloseCursor(); */
	}
?>