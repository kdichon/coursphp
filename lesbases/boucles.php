<?php 


    // Boucle For

    for ($i=0; $i < 5; $i++) { 

        echo $i." Bonjour Yohan <br>";

    }

    echo "<br>";

    for ($i=4; $i >= 0; $i--) { 

        echo $i." Bonjour Yohan <br>";

    }

    echo "<br>";

    // boucle While

    $a = 0;
    while ($a <= 4) {
        # code...
        echo $a." Bonjour Yohan <br>";
        $a++;
    }

    echo "<br>";

    // inversion
    $a = 4;
    while ($a >= 0) {
        # code...
        echo $a." Bonjour Yohan <br>";
        $a--;
    }

    echo "<br>";

    $stragiaires = ["Betsy","Didier","Yannick"];

    foreach ($stragiaires as $stragiaire) {
        # code...
        echo "Bonjour ". $stragiaire . "<br>";
    }


    echo "<br>";

    $formations =  ["Stagiaire" => "MARLIACY",
                    "Prenom" => "Herve",
                    "Age" => "44" ];
    foreach ($formations as $key => $value) {
        # code...
        echo " key : " . $key . " value : " . $value . "<br>";
    }



?>