<?php 


$etat = true; // false or true

if($etat) {

    echo "Laisse passer ! <br>";

} else {

    echo "Ne laisse pas passer ! <br>";

}

$age = 10;

switch ($age) {
    case '13':
        echo "Vous avez 13 ans <br>";
        break;
    
    case '18':
        echo "Vous avez 18 ans <br>";
        break;
    
        default:
        echo "Je ne connais pas votre age ! <br>";
        break;
}
?>