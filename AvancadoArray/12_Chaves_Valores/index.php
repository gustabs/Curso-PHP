<!-- Como fazer para exibir chaves de dados e os dados -->


<?php 

    $Cadastro = [
        'Nome' => "Gustavo",
        'Idade' => 19,
        'Profissão' => "Programador",
        'Linguagem' => "PHP"
    ];

    $Chaves = array_keys($Cadastro);

    $Valores = array_values($Cadastro);

    print_r($Chaves);
    echo "<br>";
    echo "<br>";

    print_r($Valores);
    echo "<br>";
    echo "<br>";

?>