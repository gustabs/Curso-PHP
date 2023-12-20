<?php 

    $Cadastro = [
        "Nome" => 'Gustavo',
        "sobrenome" => 'Moisés',
        "Idade" => 19,
        "Profissão" => 'Programador',
        "Cursando" => true
    ];

    $NomeSobrenome = array_slice($Cadastro, 0, 2);

    print_r($NomeSobrenome);

?>