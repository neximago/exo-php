<?php

// $cursus = array('ITSTART','DL','CDI');
 // var_dump($cursus);
 
// echo "<br/>------------------------------<br/>";

// $etudiant = array('nom'=>'Durant','prenom'=>'jean','age'=>20);
// echo $etudiant['nom'];

// echo "<br/>------------------------------<br/>";

// foreach($cursus as $valeur){
// echo $valeur;
// }

// echo "<br/>------------------------------<br/>";


// foreach($etudiant as $cle =>$valeur){
// echo 'ZE clé : '.$cle.' ZE valeur : '.$valeur.' ';
// }


// 1 - Créer un tableau qui contienne 5 notes. Afficher la moyenne

// $notes = array('10','05','12','11','10');
// function moyenne ($notes){
// $totalnotes = array_sum($notes);
// $nbrnotes = sizeof($notes);
// return ($totalnotes / $nbrnotes);
// }
// echo moyenne($notes);

// echo "<br/>------------------------------<br/>";

// 1bis - Créer un tableau qui contienne 5 notes. Afficher la moyenne

// $notes = array('10','05','12','11','10');
// $somme = 0;
// foreach($notes as $value){
// $somme += $value; // additionne par le foreach les valeurs du tableau $somme
// }
// echo $somme/count($notes);

// echo "<br/>------------------------------<br/>";


// 2-Créer un tableau qui contienne 5 notes associées à 5 matières.
// Afficher la note de chaque matière.

// $notesmat = array('français'=>'15','mathématique'=>'18','programmation'=>'12','sport'=>'14');
// foreach ($notesmat as $cle=>$valeur){
// echo $cle.' ==> '.$valeur.'<br/>';
// }

echo "<br/>------------------------------<br/>";

// 3-Créer un tableau qui contienne 3 séries de 10 notes,
// chaque série étant associée à 1 matière. Afficher la moyenne de chaque matière.

// $notes[0] = array('16','15','08','18','15','18','04','13','08','18');
// $notes[1] = array('11','18','10','18','15','12','14','03','08','10');
// $notes[2] = array('18','11','10','12','11','12','16','13','18','10');


// function moyenne ($notes){
// $moyenne = array_sum($notes)/sizeof($notes);
// return ($moyenne);
// }

// foreach ($notes as $valeur){
// echo moyenne($valeur).'<br/>';
// }
// echo 'matière 1 : '.moyenne($notes[0]).'<br/>';
// echo 'matière 2 : '.moyenne($notes[1]).'<br/>';
// echo 'matière 3 : '.moyenne($notes[2]).'<br/>';


// 4-Créer un tableau qui contienne 2 formations (chacune ayant une clé)
// et affecter à chaque formation des stagiaires (sans préciser de clé).
// Afficher Formations et Stagiaires sous forme de liste à puces à 2 niveaux.


// $dl=array('José','Brian','Pamela');
// $wmd=array('Patrick','John','Robert');
// $formations=array('DL'=>$dl,'WMD'=>$wmd);

// echo '<ul>';
// foreach($formations as $cle => $values){
// echo '<li>'.$cle.'</li>';
// echo '<ul>';
// foreach($values as $nom){
// echo '<li>'.$nom.'</li>';
// }
// echo '</ul>';
// }
// echo '</ul>';

?>

<form action="" method="get"> 
<p>Pseudo :<input type="text" name="pseudo"/></p>
<p>Nom :<input type="text" name="nom"/></p>
<p>Age :<input type="text" name="age"/><br/></p>
<input type="submit" value="Envoie la sauce Man !!" />
</form>

<?php


// 5. Question bonus 
// Appeler une page PHP en passant dans l’url un paramètre de nom pseudo et
// ayant pour valeur un des pseudonymes du tableau $personnes.
// Faire en sorte que la page affiche le pseudo et les informations associées
// contenues dans le tableau $personnes.
// Améliorer le script pour que ce dernier affiche : 
// Désolé, votre pseudonyme n’apparaît pas dans la liste si le pseudonyme
// n’est pas une clé du tableau $personnes.

// $personnes =	array(array('pseudo'=>'jo','nom'=>'Joseph','age'=>'20'),
				// array ('pseudo'=>'jack', 'nom'=>'Jacky','age'=>'30'));
				
				// $test =false;
				// if (isset($_GET['pseudo'])){
					// foreach ($personnes as $nom){
						// if($_GET['pseudo']== $nom['pseudo']){
							// foreach ($nom as $key => $info){
								// echo $key.' : '.$info.'<br/>';
									// $test=true;
									// }
								// }
							// if ($test){
								// break;
							// }						
					// if (!$test){
					// echo 'Pseudo pas dans la liste';
					// }
				// }
				// }
				
$personnes =array ('jo'=>array('nom'=>'joseph','age'=>20), 'jack'=>array('nom'=>'jack','age'=>30));

if (isset($_GET["pseudo"])&&($_GET["pseudo"]!="")){
	if (isset($personnes[$_GET["pseudo"]])){
			echo $personnes[$_GET["pseudo"]]["nom"];
			echo $personnes[$_GET["pseudo"]]["age"];
	}else{
	echo "Votre pseudo n'est pas dans la liste";
	}
}else {
echo "Vous n'avez pas indiqué de pseudo";
}			
			
// function chekpseudo($personnes){
// if (isset($_POST['pseudo'])){
// foreach ($personnes as $cle){
	// foreach ($cle as $valeur){
	// if ($valeur){
	// echo 'Désolé, votre pseudonyme n’apparaît pas dans la liste';
	// }
	// } 
// }
// }
// }

// chekpseudo($personnes);

// if((isset($_POST['pseudo']))&&(isset($_POST['prenom']))&&(isset($_POST['age']))){
	
	// foreach ($personnes as $cle){
		// foreach ($cle as $valeur){
	// echo 'Bonjour '.htmlspecialchars ($_POST['pseudo']).', '.htmlspecialchars ($_POST['nom']).' vous avez : '.htmlspecialchars ($_POST['age']).'<br/>';
	// }
	// }
	// }
	/* <script>alert('Danger!!');</script> */
	/* htmlspecialchars protège les champs de l'insertion de code javascript */
?>