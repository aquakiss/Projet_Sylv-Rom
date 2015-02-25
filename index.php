<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>		
		<meta content="text/html" charset="UTF-8" http-equiv="Content-Type" />	
		<meta name="author" content="Turing"/>	
		<!-- <base href="http://www.SylvaNdRom.com"/> -->
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="Css/style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.2.0-dist/css/bootstrap.css">
		<script src="jquery-2.1.3.min.js"></script>
		<script src="bootstrap-3.2.0-dist/js/bootstrap.js"></script>
		<script type="text/javascript" src="custom.js"></script>

		<title> A la rencontre des Entreprises </title>

		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,800,500,600">
		<link href="HoverEffectIdeas/css/normalize.css" type="text/css" rel="stylesheet">
		<link href="HoverEffectIdeas/css/demo.css" type="text/css" rel="stylesheet">
		<link href="HoverEffectIdeas/css/set2.css" type="text/css" rel="stylesheet">
		<link href="HoverEffectIdeas/fonts/font-awesome-4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<!--		<script type="text/javascript">  -->

	</head>

	<body>
		<div>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			    	<a class="navbar-brand" href="?Accueil"><img id="Ind_ptitimg" src="Image/make-group.svg"></a>
			    	<a class="navbar-brand" href="?Entrep">Les Entreprises</a>
			    </div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="#">Entreprises partenaires</a></li>
			      </ul>
			      <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="nom de l'entreprise">
			        </div>
			        <button name="search" type="submit" class="btn btn-default">Recherche</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">À propos</a></li>
			        <li><a href="?contactPro">Nous Contacter</a></li> <!-- mettre un id pour décaller vers la gauche -->
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
		<div>
			<?php
				include("Php/redirection.php"); // redirection des pages en fonction des ?...
			?>
		</div>
		<footer class="bs-docs-footer" role="contentinfo">
			<div class="container">
				<ul class="bs-docs-footer-links text-muted">
					<li>Currently v0.0.3</li>
				</ul>
			</div>
		</footer>
	</body>
</html>
