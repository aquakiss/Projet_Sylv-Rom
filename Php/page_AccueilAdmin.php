<!-- page accueil Admin -->
<div style="margin-bottom:10px;">
	<h1 class="text-center color"><blockquote>
		Gestion des Entreprises: 
	</blockquote></h1>
	<p><section>
		<ul class="nav nav-pills">
			<li class="AccAdm" role="presentation"><a href="?Adm&Acc"	     class="btn btn-success" role="button">Zone d'Administration</a></li>
			<li class="AccAdm" role="presentation"><a href="?Adm&Add" 	     class="btn btn-primary" role="button">Ajouter une entreprise</a></li>
		 	<li class="AccAdm" role="presentation"><a href="?Adm&Upd"		 class="btn btn-warning" role="button">Modifier une entreprise aux choix</a></li>
		 	<li class="AccAdm" role="presentation"><a href="?Adm&Dele"  	 class="btn btn-danger"  role="button">Supprimer une entreprise aux choix</a></li>
		 	<li class="AccAdm" role="presentation"><a href="?Adm&Notif" 	 class="btn btn-info"    role="button">Voir les récentes notifications</a></li>
		 	<li class="AccAdm" role="presentation"><a href="?Adm&AllNotif"   class="btn btn-info"    role="button">Voir toutes les notifications</a></li>
		</ul>
	</section></p>	  
</div>
<div>
	<?php
		include("Php/Redirection_Adm.php"); // redirection des pages en fonction des ? de l'admin
	?>
</div>