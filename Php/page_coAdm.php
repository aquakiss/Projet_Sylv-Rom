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
				<button type="submit" class="btn btn-default navbar-btn">Connexion</button>
			</section>
		</fieldset>
	</form>	
</div>
<?php 
	// connexion a la bdd
	if(!empty($_POST["ident"]) && !empty($_POST["mdp"]))
	//test si les champs ne sont pas vide
	{
		//echo "Login valide";	
		$nom  = $_POST["ident"]; //champ nom
		$mdp = $_POST["mdp"]; //champ prenom
		$req = $connexion->prepare("SELECT nom, mdp FROM admin WHERE nom = :nom AND mdp = :mdp");
		$req->execute(array(
			'nom' => $nom,
			'mdp' => $mdp
		));
		if(count($req)){
			$_SESSION["newsession"]=1;
			header("Location: ?Adm");
		}
	}
?>