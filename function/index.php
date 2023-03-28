<?php
include("mesFonctions.php");
include("constante.php");

    foreach ($stagiaires as $stagiaire) {
        # code...
        echo idInformation($stagiaire["nom"],$stagiaire["prenom"]) . " vous êtes " 
                        . sexeInformation($stagiaire["sexe"]) . "<br>" ;
    }
?>