<?php
// 1 – Écrire un programme PHP qui affiche avec une boucle sur une seule ligne les nombres de 1 à 10 séparés par des espaces.
// Le faire avec les 3 types de boucles.

// 2 – Écrire un programme PHP qui affiche sur 10 lignes les nombres de 1 à 10 .
// Le faire avec les 3 types de boucles.



$a=1;
do{
echo $a++." ";
}while($a<=10);
echo "<br/>";


// le meme avec des fonctions

function afficheligne($p){
do{
echo $p++." ";
}while($p<=25);
return $p;
}
afficheligne(8);


echo "<br/>";
$i=1;
while($i<=10){
echo $i++."<br/>";
}


for($e=0;$e<=10;$e++){
echo 'ligne '.$e."<br/>";
}

// 3 – Écrire un programme PHP qui affiche en une seule boucle sur 1 ligne les nombres de 1 à 5,
// puis sur une deuxième ligne les nombres de 6 à 10.
// Le faire avec les 3 types de boucles.

$l1=1;

do{
echo $l1++." ";
}while($l1<=5);
echo "<br/>";
do{
echo $l1++." ";
}while($l1<=10);

echo "<br/>";


for ($li=1;$li<=10;$li++){
echo $li." ";
if ($li==5){
echo "<br/>";
}
}

// le meme avec des fonctions
echo "<br/>";
function toto($l1){
do{
echo $l1++." ";
}while($l1<=16);
echo "<br/>";
do{
echo $l1++." ";
}while($l1<=32);
return $l1;
}

toto(8);


// 4 – Écrire un programme PHP qui affiche un tableau HTML de 10 lignes et 10 colonnes
// contenant les nombres de 00 à 99.
// Le faire avec 2 boucles , puis avec 1 seule.

echo "<br/>";


echo '<table border="1">';
for ($a=0;$a<10;$a++){
echo '<tr>';
		for ($y=0;$y<10;$y++){
		echo '<td>'.$a.$y.'</td>';
	}
	echo '<tr/>';
	}
echo '</table>';
	

// le meme avec des fonctions
echo "<br/>";

function tableau100($a){
echo '<table border="1">';
for ($a=0;$a<10;$a++){
echo '<tr>';
		for ($y=0;$y<10;$y++){
		echo '<td>'.$a.$y.'</td>';
	}
	echo '<tr/>';
	}
echo '</table>';
return $a;
}
tableau100();

echo "<br/>";











echo '<table border="1">';
for($nombre=0;$nombre<100;$nombre++){
	if ($nombre%10==0){
	echo '<tr>';
	}
	echo '<td>'.sprintf('%02d',$nombre).'</td>';
		if ($nombre %10===9){
		echo '</tr>';	
		}
}
echo '</table>';


?>