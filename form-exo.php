


<form action="" method="post"> 
<p>Prénom :<input type="text" name="prenom"/></p>
<p>Nom :<input type="text" name="nom"/><br/></p>
<p>Repeat :<input type="text" name="nbre"/><br/></p>
<input type="submit" value="Envoie la sauce Man !!" />
</form>

<?php
/* url envoyée : http://localhost/exo-php/form-exo.php?nbre=18&prenom=Spencer&nom=Depp */
if((isset($_POST['prenom']))&&(isset($_POST['nom']))&&(isset($_POST['nbre']))){
	
	for ($a=0;$a<$_POST['nbre'];$a++){
	echo 'Bonjour '.htmlspecialchars ($_POST['prenom']).', '.htmlspecialchars ($_POST['nom']).'<br/>';
	}
	}
	/* <script>alert('Danger!!');</script> */
	/* htmlspecialchars protège les champs de l'insertion de code javascript */
?>
