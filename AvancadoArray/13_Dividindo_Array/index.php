<!-- Divide um array em dois -->

<?php

    $cadastro = ["Gustavo", "Moisés", "Silva", "Inácio", "Santos"];

    $NomeSobrenome = array_chunk($cadastro, 2);

    print_r($NomeSobrenome[0]);
    echo "<br>";
    print_r($NomeSobrenome[1]);

?>