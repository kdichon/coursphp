<?php 

    $nom ="Hervé";
    
    echo "Bonjour".$nom;

    echo "Bonjour $nom";

    //$stagiaires = ["Didier", "Yohan", "Hervé"];

    $stagiaires = array(
        array("NOM", "PRENOM"),
        array("TURLET","TOTO","MARLIACY"),
        array("Yohan","Yvann","Hervé")
    );
    var_dump($stagiaires);

    for ($indice = 0; $indice < count($stagiaires) ; $indice++) { 
        echo $indice."".$stagiaires[$indice]."<br>";
    };


    asort($stagiaires);

    foreach ($stagiaires as $key => $stagiaire) {       //pour chaque etape du tableau [$stagiaires] as $key => $stagiaire
        echo $stagiaire."<br>";
    }



    

?>