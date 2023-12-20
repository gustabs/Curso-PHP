<!-- Tranforma variaveis em um array associativo -->

<?php 

    $Nome = "Gustavo";
    $Sobrenome = "Moisés";
    $Idade = 19; 
    $Profissao = "Programador";
    $Faculdade = "Cursando";

    $Cadastro = compact("Nome", "Sobrenome", "Idade", "Profissao", "Faculdade");

    print_r($Cadastro);