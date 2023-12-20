<?php

    $Alimentos = [
        "Batata",
        "Maçã",
        "Pera",
        "Feijão",
        "Arroz"
    ];

    for($i = 0; $i < count($Alimentos); $i++)
    {
        echo "$i- ". $Alimentos[$i];
        echo "<br>";
    }

    array_splice($Alimentos, 2, 2);
    echo "<br><br>";

    for($i = 0; $i < count($Alimentos); $i++)
    {
        echo "$i- ". $Alimentos[$i];
        echo "<br>";
    }

    

