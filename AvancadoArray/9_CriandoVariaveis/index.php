<!-- Convertendo chaves de um array em varialvel -->


<?php 

    $Cadastro = [
        'PrimeiroNome' => "Gustavo",
        'Sobrenome' => "Moisés",
        'Idade' => 19,
        'Profissão' => "Programador",
        'Linguagem' => "PHP",
    ];

    extract($Cadastro); // Converteu todas as chaves em variavel

    echo $PrimeiroNome;
    echo "<br>";
    echo $Sobrenome;
    echo "<br>";
    echo $Idade;
    echo "<br>";
    echo $Profissão;
    echo "<br>";
    echo $Linguagem;
    echo "<br>";
    


?>