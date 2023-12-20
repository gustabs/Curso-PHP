<?php 

    class Carro 
    {

        public $Rodas = "Off-road";
        public $Farol = "Xenon";
        public $Porta = "Blindada";     // Só pode ser acessado dentro da classe 
        private $Motor = "WRX";    // Só pode ser acessado dentro da classe
        protected $Volante = "Esportivo";   // Só pode ser acessado dentro da classe // OBS: Não pode ser ultilizado nem por herança


        public function alterarMotor($Veiculo)         //| 
        {                                              //-->  Só pode modificar um objeto por dentro da classe original
            echo "Tipo de Motor: ";                    //-->
            return $Veiculo->Motor = "2JZ";            //|
        }

        public function alterarVolante($Veiculo)       //| 
        {                                              //-->  Só pode modificar um objeto por dentro da classe original
            echo "Tipo de Volante: ";                  //-->
            return $Veiculo->Volante = "Normal";       //|
        }

    }

    class Mecanico{

        // public function alterarMotor($Veiculo) //| 
        // {                                      //-->  Não é possivel ultilizar objetos privados de outras classes
        //     echo "Tipo de Motor: ";            //-->  ERRO
        //     return $this->Motor = "2JZ";       //|
        // }

        public function alterarRodas($Veiculo)
        {
            echo "Tipo de rodas: ";
            return $Veiculo->Rodas = "Pneus radiais";
        }

        public function alterarFarol($Veiculo)
        {
            echo "Tipo de Farol: ";
            return $Veiculo->Farol = "Led Normal";
        }

        public function alterarPortas($Veiculo)
        {
            echo "Tipo de porta: ";
            return $Veiculo->Porta = "Aluminio";
        }

    }

    

    $FordKa = new Carro;
    $Gustavo = new Mecanico;

    echo "<h1>Ford Ka</h1>";
    echo "<h2>Ficha tecnica:</h2>";

    echo $Gustavo->alterarRodas($FordKa) . "<br>";    
    echo $Gustavo->alterarFarol($FordKa) . "<br>";
    echo $Gustavo->alterarPortas($FordKa) . "<br>";
    echo $FordKa->alterarMotor($FordKa) . "<br>";
    echo $FordKa->alterarVolante($FordKa) . "<br>";

?>