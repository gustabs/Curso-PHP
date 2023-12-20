<!-- Esta função busaca apenas o valor e não a chave -->

<?php 

    $Cadastro = [
        'Nome' => "Gustavo",
        'idade' => 19
    ];

    if(in_array("Gustavo", $Cadastro))
    {
        echo "Existe <br>";
    }
    else
    {
        echo "Não existe <br>";
    }

    
    if(in_array("Idade", $Cadastro))
    {
        echo "Existe <br>";
    }
    else
    {
        echo "Não existe <br>";
    }

?>