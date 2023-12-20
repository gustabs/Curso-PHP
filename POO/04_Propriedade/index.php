<?php 

    class Car {

        public $Rodas = 4; // Propriedade
        public $Aro = 20; // Propriedade
        public $Cor = "Vermelho"; // Propriedade

        function Ligar($NomeCarro)
        {
            echo "$NomeCarro ligou";
        }
    }

    $Ferrari = new Car;

    echo $Ferrari->Rodas . "<br>"; //Não é necessário utilizar o "$".
    echo $Ferrari->Aro . "<br>";
    echo $Ferrari->Cor = "Azul" . "<br>"; // Pode atribuir um novo valor a uma varialvel.

    $Ferrari->Ligar("Ferrari");

