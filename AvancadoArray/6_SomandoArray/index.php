<?php 

    $Numeros = [45, 3, 57, 22, 72, 93, 68, 10, 85, 42];

    function Soma($a, $b)
    {          # Numero somado + o próximo número
        return $a + $b;
    }

    function Subtracao($a, $b)
    {          # Numero subtraido - o próximo número
        return $a - $b;
    }

    $resultadoSoma = array_reduce($Numeros, "Soma"); // Necessário a função estar em String

    $resultadoSubtracao = array_reduce($Numeros, "Subtracao"); // Necessário a função estar em String 
    
    echo $resultadoSoma . "<br>";
    echo $resultadoSubtracao;
