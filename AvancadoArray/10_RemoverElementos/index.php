<?php 

    $Cadastro = [
        '0' => "Gustavo",
        '1' => "Moisés",
        '2' => 19,
        '3' => "Programador",
        '4' => "PHP",
    ];

    for($i = 0; $i < count($Cadastro); $i++)
    {
        echo $i . "- ". $Cadastro[$i];
        echo '<br>';
    }

    // ====================Array_splice==================== //

    array_splice($Cadastro, 3, 1); // Variavel, Começo, Comprimento

    // ==================================================== //
    echo "<br><br>";

    for($i = 0; $i < count($Cadastro); $i++)
    {
        echo $i . "- ". $Cadastro[$i];
        echo '<br>';
    }

?>