<?php // chargement du head HTML et des fonctions
require_once('exo-login-head.inc.php');
include_once('functions.inc.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Bienvenue chez TotoCorp !</div>
			</div>
				<div class="panel-body">
				<h2 class ="text-center">Veuillez vous identifier ou créer un compte</h2>
				<h3>Se connecter</h3>
				<form action="" method="get"><!--formulaire de connexion-->
					<div class="form-group">
					<label class="control-label" for="focusedInput">Email :</label>
					<input class="form-control" id="focusedInput" value="" name="login"/>		
					<label class="control-label" for="focusedInput">Mot de passe :</label>
					<input class="form-control" id="focusedInput" value="" type="password" name="mdp"/>
					</div>				
				<!-- <button type="submit" class="btn btn-primary" name="connection">Connecte-toi Dude !!</button>-->
				<div class="pull-right"><input class="btn btn-success" type="submit" value="Connecte-toi Dude !!" name="connection" /> 
				<p></p>
				<input class="btn btn-warning"type="submit" value="Créer un compte" name="creation" /> 
				</div>
				</form>

<?php // le code du formulaire

		if (isset($_GET["connection"])){		
			if (isset($_GET["login"])&&($_GET["login"]!="") && isset($_GET["mdp"])&&($_GET["mdp"]!="")){
			$login = $_GET["login"];
			$mdp = $_GET["mdp"];
				if (est_authentifie($login,$mdp)){
						echo 'coucou';
				}else {echo'<div class="alert alert-danger alert-error">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<strong>Arfff !</strong> L\'email et le mot de passe ne correspondent pas.</div>';
				}
			}
			}
		if (isset($_GET["creation"])){
			if (isset($_GET["login"])&&($_GET["login"]!="") && isset($_GET["mdp"])&&($_GET["mdp"]!="")){
				$login = $_GET["login"];
				$mdp = $_GET["mdp"];
					if (existeLogin($login,$mdp)){
						echo '<div class="alert alert-danger alert-error">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Oups !</strong> L\'email semble déjà enregistré, veuillez choisir un nouvel email.</div>';
					}else {
					ajouter_utilisateur ($login, $mdp);
					echo '<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Super !</strong>Le compte à été créé. Vous pouvez vous connecter.</div>';
					}	
			}
		}
		
?>	
	</div>
	</div>
	</div>
	<div class="col-md-4">
	<section>
	<p>Veuillez vous connecter pour utiliser ce service</p>
	</section>
	</div>
	<div class="col-md-4">
	<p>Veuillez vous connecter pour utiliser ce service</p>
	</div>
	</div>
	</div>



<?php
require_once('exo-login-footer.inc.php');
?>