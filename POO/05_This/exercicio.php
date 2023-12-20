<?php

    class Carro {

        public $VelocidadeMax; // Para acessar o objetos de dentro da classe é necessário o uso do "$This"

        function setVelocidadeMax($VelocidadeMax)
        {
             $this->VelocidadeMax = $VelocidadeMax;
             // return $VelocidadeMax <- Nâo consegue acessar o objeto de dentro da classe 
        }

        function getVelocidadeMax($Velocidade)
        {
            return "A velocidade do carro é de $Velocidade";
        }
    }

    $BMW = new Carro;

    $BMW->setVelocidadeMax(260);
    echo "Velocidade máxima é de $BMW->VelocidadeMax <br>";

    echo $BMW->getVelocidadeMax(60);
