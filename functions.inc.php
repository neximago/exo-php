<?php
// variable chemin du fichier de mot de passe
static $adresse_fichier='mdp.txt';

// Test pour vérifier si le login existe bien dans le fichier texte
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

// Test pour vérifier si le login et le mot de passe correspondent
function est_authentifie($login,$mdp){
global $adresse_fichier;
$fichier = fopen($adresse_fichier,'r');
	while (!feof($fichier)){
		if (fgets($fichier) == $login.'#'.$mdp."\n"){
			fclose ($fichier);
			return TRUE;
			}	
	}
fclose($fichier);
return FALSE;
}

// test de login

function mdpOk ($login, $mdp){


}

// Ajout et écriture de l'utilisateur
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

?>
