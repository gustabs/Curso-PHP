<!-- Verificando se uma chave existe -->

<?php 

    echo "==========array_key_exists==========";
    echo "<br>";
    echo "<br>";

    $Cadastro = [
        'Nome' => "Gustavo",
        'Idade' => 19
    ];

    if(array_key_exists("Nome", $Cadastro))
    {
        echo "A chave existe!<br>";
    }
    else
    {
        echo "A chave não existe!<br>";
    }

    if(array_key_exists("Profissão", $Cadastro))
    {
        echo "A chave existe!<br>";
    }
    else
    {
        echo "A chave não existe!<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "==========Isset==========";
    echo "<br>";
    echo "<br>";

    if(isset($Cadastro['Nome'], $Cadastro))
    {
        echo "A chave existe!ISSET<br>";
    }
    else
    {
        echo "A chave não existe!ISSET<br>";
    }

    if(isset($Cadastro['Profissão'], $Cadastro))
    {
        echo "A chave existe!ISSET<br>";
    }
    else
    {
        echo "A chave não existe!ISSET<br>";
    }




?>