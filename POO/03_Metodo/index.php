<?php 

    class Pessoa {
        function falar() // funções = metodos
        {
            echo "Olá Mundo!<br>";
        }

        function Somar($a, $b)// funções = metodos
        {
            echo $a + $b;
        }
    }

    $Matheus = new Pessoa;
    $Gustavo = new Pessoa;

    $Matheus->falar();
    $Gustavo->falar();


    $Matheus->Somar(2, 2);
    echo "<br>";
    $Gustavo->Somar(3, 3);
?>