<!-- page d'affichage des notification de la table contact-->
<div>
	<h1 class="text-center color"><blockquote>Récentes notifications :</blockquote></h1> 		
</div>
<?php
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
	//recupere les differents champs de la table contact par ordre de la plus résente date
	 $reponse = $connexion->query('SELECT *  FROM contact ORDER BY date_crea DESC');
	 
	$donnees = $reponse->fetchAll();
?>
<div class="table-responsive">
  <table class="table color">
 	<tr>
  		<td><i><u>Nom: </i></td>
  		<td><i><u>Prenom: </u></i></td>
 		<td><i><u>Sujet: </u></i></td>
 		<td><i><u>Message: </u></i></td>
 		<td><i><u>Email: </u></i></td>
 		<td><i><u>Date: </u></i></td>
 		<td><i><u>Check: </u></i></td>

	</tr>
	<?php
	$isVu = 0;
	foreach($donnees as $row){
	 	if($row['vue'] == 0){ 
	  		$isVu ++; 
			?><tr>
			   	<td><?php echo $row['nom']; ?></td>
			   	<td><?php echo $row['prenom']; ?></td>
			   	<td><?php echo $row['sujet']; ?></td>
			   	<td><?php echo $row['message']; ?></td>
			   	<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['date_crea']; ?></td>
				<td><a class="btn btn-info" role="button">Vu</a></td>
			</tr>
	  	<?php
		}
	}
	if ($isVu == 0) {
		echo "Il n'y a pas de récente Notification.";
	}
		?>
	</table>
</div>