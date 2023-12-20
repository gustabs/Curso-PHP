<?php

    class Pessoa {

        public $Nome;
        public $Idade;

        function Andar($Nome)
        {
            echo "$Nome andou";
        }
    }

    class Cachorro{

        public $NomeCachorro;
        public $Raca;

        function Latir($Nome)
        {
            echo "$Nome latiu";
        }

        function LatirForte($Nome)
        {
            echo strtoupper("$Nome latiu forte");
        }
    }


    $Cachorro = new Cachorro;

    echo $Cachorro->NomeCachorro = "Tom";
    echo "<br>";

    echo $Cachorro->Raca = "Shih-tzu";
    echo "<br>";

    $Cachorro->Latir($Cachorro->NomeCachorro);
    echo "<br>";

    $Cachorro->LatirForte($Cachorro->NomeCachorro);
    echo "<br>";

    $Cadastro = new Pessoa;

    echo $Cadastro->Nome = "Gustavo";
    echo "<br>";

    echo $Cadastro->Idade = 19;
    echo "<br>";

    $Cadastro->Andar($Cadastro->Nome);


