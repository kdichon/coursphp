<?php 

// exercice 1
/***
 * Fonction retourne "hello World"
 */
function helloWorld(){
    return "hello World !";
}

// exercice 2
function quiEstLeMeilleurProf(){
    return "Le prof de programmation web.";
}

// exercice 3
function jeRetourneMonArgument($arg){
    return $arg;
}

// exercice 4
function concatener($nom, $prenom){
    return $nom.$prenom;
}

// exercice 5
function concatenerAvecEspace($nom, $prenom){
    return $nom . " " . $prenom;
}

// exercice 6
function somme($item1, $item2){
    return $item1 + $item2;
}

// exercice 7
function soustraction($item1, $item2){
    return $item1 - $item2;
}

// exercice 8
function multiplication($item1, $item2){
    return $item1 * $item2;
}

// exercice 9
function estIlMajeur($majorite){
    if ($majorite >= 18) {
        $majorite = true;
    } else {
        $majorite = false;
    }
    var_dump($majorite);
    return $majorite;
}

// exercice 10
function plusGrand($item1, $item2){
    if ($item1 > $item2) {
        $grand = $item1;
    } else {
        $grand = $item2;
    }
    var_dump($grand);
    return $grand;

}

// exercice 11
function plusPetit($item1, $item2){
    if ($item1 < $item2) {
        $petit = $item1;
    } else {
        $petit = $item2;
    }
    var_dump($petit);
    return $petit;
}

// exercice 12
function plusPetit12($item1, $item2){
    if ($item1 < $item2) {
        $petit = $item1;
    } else {
        $petit = $item2;
    }
    var_dump($petit);
    return $petit;
}

// exercice 13
function premierElementTableau($tableau){
    if (isset($tableau[0])) {
        return $tableau[0];
    } else {
        return null;
    }
}

// exercice 14
function dernierElementTableau($tableau){
    if (isset($tableau)) {
        return $tableau[count($tableau)-1];
    }
}

?>