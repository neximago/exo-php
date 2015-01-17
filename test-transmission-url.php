<?php

// url envoyée : http://localhost/exo-php/test-transmission-url.php?nbre=18&prenom=Spencer&nom=Depp


if((isset($_GET['prenom']))&&(isset($_GET['nom']))&&(isset($_GET['nbre']))){
	for ($a=0;$a<$_GET['nbre'];$a++){
	echo 'Bonjour '.$_GET['prenom'].', '.$_GET['nom'].'<br/>';
	}
	}

?>