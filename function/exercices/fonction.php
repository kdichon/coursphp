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
function plusPetit12($item1, $item2, $item3){
    if ($item2 > $item1 && $item1 < $item3) {
        $petit3 = $item1;
    } elseif ($item1 > $item2 && $item2 < $item3) {
        $petit3 = $item2;
    } else {
        $petit3 = $item3;
    }
    var_dump($petit3);
    return $petit3;
}

// exercice 13
function premierElementTableau($tableau){
    if (isset($tableau[0])) {
        return $tableau[0];
    }
}

// exercice 14
function dernierElementTableau($tableau){
    if (isset($tableau)) {
        return $tableau[count($tableau)-1];
    }
}

// exercice 15
function plusGrandTab($grandTableau){
    if (isset($grandTableau)) {
        $memoG = 0;
        for ($i = 0; $i < count($grandTableau) ; $i++) {
            if ($grandTableau[$i] > $memoG) {
                $memoG = $grandTableau[$i];
            }
        }
        return $memoG;
    } 
}

// exercice 16
function plusPetitTab($petitTableau){
    if (isset($petitTableau)) {
        $memoP = $petitTableau[0];
        for ($i = 0; $i < count($petitTableau) ; $i++) {
            if ($petitTableau[$i] < $memoP) {
                $memoP = $petitTableau[$i];
            }
        }
        return $memoP;
    } 
}

// exercice 17
function verificationPasword($pasword){
    if (strlen($pasword) < 8) {
        return false;
    } else {
        return true;
    }
}

// exercice 18
function verificationPasword2($pasword){
    if (strlen($pasword) < 8) {
        return false;
    } else {
        return true;
    }
}



?>