<?php 

include("fonction.php");

echo helloWorld() . "<br>";

echo "Qui est le meilleur prof ?" . "<br>" . quiEstLeMeilleurProf() . "<br>";

echo jeRetourneMonArgument("Hervé") . "<br>";

$namePlayer = "Antoine";
$lastnamePlayer = "Griezmann";

echo concatener($namePlayer, $lastnamePlayer). "<br>";

echo concatenerAvecEspace($namePlayer, $lastnamePlayer). "<br>";

$nb1 = 5;
$nb2 = 5;
echo "résultat: " . somme($nb1, $nb2) . "<br>";

$nb1 = 5;
$nb2 = 5;
echo "résultat: " . soustraction($nb1, $nb2) . "<br>";

$nb1 = 5;
$nb2 = 5;
echo "résultat: " . multiplication($nb1, $nb2) . "<br>";

$age = 5;
echo "résultat: " . estIlMajeur($age) . "<br>";

$nb1 = 3;
$nb2 = 2;
echo "résultat: " . $nb1 . " et " . $nb2 . " est " . plusGrand($nb1, $nb2) . "<br>";

$nb1 = 3;
$nb2 = 2;
echo "résultat: " . $nb1 . " et " . $nb2 . " est " . plusPetit($nb1, $nb2) . "<br>";

$nb1 = 3;
$nb2 = 2;
$nb3 = 1;
echo "résultat: " . $nb1 . ", " . $nb2 . " et " . $nb3 . " est : " . plusPetit12($nb1, $nb2, $nb3) . "<br>";

$stagiaires = ["toto","tata","tete"];
//$stagiaires = [];

var_dump (premierElementTableau($stagiaires));

echo "<br>";

var_dump(dernierElementTableau($stagiaires)) . "<br>";

echo "<br>";

$numeros = [1,2,3,4,5];
var_dump(plusGrandTab($numeros));

echo "<br>";

var_dump(plusPetitTab($numeros));

echo "<br>";

$monDePasse = "aezdscv";
var_dump(verificationPasword($motDePasse));

var_dump(verificationPasword2($motDePasse));

?>