<h1>Se connecter</h1>
<form action="" method="get"> 
<p>login : <input type="text" name="login"/></p>
<p>mdp : <input type="password" name="mdp"/><br/></p>
<input type="submit" value="Envoie tes accès Dude !!" name="connection" />
</form>

<h1>Créer un compte</h1>
<form action="" method="get"> 
<p>login : <input type="text" name="login"/></p>
<p>mdp : <input type="password" name="mdp"/><br/></p>
<input type="submit" value="Envoie tes accès Dude !!" name="ajout_compte"/>
</form>

<h1>Changer de mot de passe</h1>
<form action="" method="get"> 
<p>ancien mot de passe : <input type="text" name="old_mdp"></p>
<p>login : <input type="text" name="login"/></p>
<p>mdp : <input type="password" name="mdp"/><br/></p>
<input type="submit" value="Envoie tes accès Dude !!" name="ajout_compte"/>
</form>


<?php

// 1- Créer une fonction qui teste si un utilisateur (login) est présent dans le fichier.

$adresse_fichier='mdp.txt';



if (isset($_GET["login"])&&($_GET["login"]!="") && isset($_GET["mdp"])&&($_GET["mdp"]!="")){
	if (existeLogin($_GET["login"])){
	echo 'Le login existe déjà';
	}else {
			ajouter_utilisateur($_GET["login"],$_GET["mdp"]);
			echo 'Bravo ! Vous êtes enregistré';
			}
}


function existeLogin ($login){
global $adresse_fichier;
$fichier = fopen($adresse_fichier,'r');
	while (!feof($fichier)){
	$ligne =fgets($fichier);
	$login_fichier = explode("#",$ligne)[0];
		if (strcasecmp($login_fichier,$login)==0){
		fclose($fichier);
		return TRUE;
		}
	}
	fclose($fichier);
	return FALSE;
}



// ma fonction
// function enregistrerUser ($login,$mdp){
			// $fichier = fopen('mdp.txt','r+');
			// fseek($fichier,0,SEEK_END);
			// fwrite($fichier,("\n".$login.'#'.$mdp));
			// fclose ($fichier);		
		// }
		
// correction
function ajouter_utilisateur ($login, $mdp){
if (!existeLogin($login)){
	global $adresse_fichier;
	$fichier = fopen($adresse_fichier,'a+');
			fwrite($fichier, $login.'#'.$mdp."\n");
			fclose ($fichier);		
	}else {
		echo 'le login est déjà utilisé';
}
}

function est_authentifie($login,$mdp){
global $adresse_fichier;
$fichier = fopen($adresse_fichier,'r');
	while (!feof($fichier)){
		if (fgets($fichier) == $login.'#'.$mdp."n"){
			fclose ($fichier);
			return TRUE;
			}	
	}
fclose($fichier);
return FALSE;
}
// script Floran
function changePassword($login, $pass, $newpass) {
	global $adresseFichier;
	if ($newpass != "") {
		$verif = false;
		$read=file($adresseFichier);
		foreach ($read as $couple) {
			if ($couple == $login.'#'.$pass."\n") {
				$contenu = str_replace($login.'#'.$pass."\n", $login.'#'.$newpass."\n", file_get_contents($adresseFichier)); 
				file_put_contents($adresseFichier, $contenu); 
				$verif = true;
			}
		}
		if ($verif == true) {
			return "<p class='valide'>Votre mot de passe a bien été modifié...</p>";
		} else {
			return "<p class='erreur'>Le couple identifiant / ancien mot de passe est incorrect...</p>";
		}
	} else {
		return "<p class='erreur'>Vous devez spécifier un nouveau mot de passe.</p>";
	}
}





?>