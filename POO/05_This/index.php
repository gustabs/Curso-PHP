<?php 

    class Animal {

        public $Nome;

        function escolherNome($Nome)
        {
            $this->Nome = $Nome; // This é usado somente dentro de um método 
        }

        function Latir($Nome)
        {
            return "$Nome latiu"; 
        }

        function LatirForte($Nome)
        {
            return strtoupper("$Nome latiu forte"); 
        }
    }

    $Tom = new Animal;

    $Tom->escolherNome("Tom");

    echo $Tom->Nome;
    echo "<br>";

    echo $Tom->Latir($Tom->Nome);
    echo "<br>";

    echo $Tom->LatirForte($Tom->Nome);
    echo "<br>";


