<?php

    class Cachorro {

        function Latir($Nome) // funções = metodos
        {
            echo "$Nome latiu<br>";
        }

        function Andar($Nome) // funções = metodos
        {
            echo "$Nome andou<br>";
        }
    }

    $NomeCachorro = "Spike";

    $Cachorro = new Cachorro();

    $Cachorro->Latir($NomeCachorro);
    $Cachorro->Andar($NomeCachorro);