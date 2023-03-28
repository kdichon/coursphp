<?php
    /*
    **** Version I ****

    foreach ($stagiaires as $stagiaire) {
        # code...
        //var_dump($stagiaire);

        $infoSexe = "un homme";

        if ($stagiaire["sexe"] == "f") {
            # code...
            $infoSexe = "une femme";
        }

        echo "Bonjour " . $stagiaire["nom"] . " " 
                        . $stagiaire["prenom"] . " vous êtes " 
                        . $infoSexe . "<br>" ;
    }
    */

    /**********************
     * 
     *  Fonction qui retourne le sexe :
     *  un homme ou une femme,
     *  à partir de $sexe = 'f' ou 'h'
     * 
     * ********************/

     function sexeInformation($sexe = 'f'){
        if ($sexe == "f") {
            return "une femme";
        } else {
            return "un homme";
        }
    }

    /**********************
     * 
     *  Fonction qui retourne l'identité de l'utilisateur :
     *  le nom et le prenom,
     *  à partir de $nom = $stagiaire["nom"] et $prenom = $stagiaire["prenom"]
     * 
     * ********************/

     function idInformation($nom, $prenom){
        echo  "Bonjour " . $nom . " " . $prenom;
        return ;
    }

?>