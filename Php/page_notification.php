<!-- page d'affichage des notification de la table contact-->
<div>
	<h1 class="text-center color"><blockquote>Récentes notifications :</blockquote></h1> 		
</div>

<?php
	echo $_GET["Notif"];
	if(isset($_GET["Notif"])){
		$id = $_GET["Notif"];
		$req = $connexion->prepare("UPDATE contact SET vue = '1' WHERE id = :id");
		$req->execute(array(
				'id' => $id
		));
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
				<td><a href="?Adm&Notif= <?php echo $row['id'] ?>" class="btn btn-info">Vu</a></td>
			</tr>
	  	<?php
		}
	}
		?>
	</table>
</div>
<?php
if ($isVu == 0) {
	?>
		<div class="color center">Il n'y a pas de récente Notifications.</div>
	<?php
	}
?>